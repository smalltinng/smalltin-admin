<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Http\Resources\QuestionResource;
use Illuminate\Support\Carbon;
use App\Jobs\SaveMonthlyStats;
use App\Models\Field;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class QuizController extends Controller
{
    const TIME_LIMIT = 120; // 80 seconds for 1.20 minutes



    private function generateAndSendQuestions($userId, $fields)
    {
        $apiKey = env('OPENAI_API_KEY');

        // Fetch field names and map them to IDs
        $fieldMap = Field::whereIn('id', $fields)->pluck('id', 'name');
        $fieldNames = $fieldMap->keys()->implode(', ');

        // **Retrieve last 100 asked questions for these fields**
        $recentQuestions = Question::where('user_id', $userId)  // Filter by user_id
            ->whereIn('field_id', $fields)  // Filter by field_id (multiple fields allowed)
            ->orderBy('created_at', 'desc')
            ->limit(100)
            ->pluck('question')  // Get only the question text
            ->toArray();
        if (empty($recentQuestions)) {
            $recentQuestions = [];
        }

        try {
            $response = Http::withOptions([
                'verify' => false,
            ])->withHeaders([
                        "Authorization" => "Bearer " . $apiKey,
                        "Content-Type" => "application/json",
                    ])->timeout(60)->post("https://api.openai.com/v1/chat/completions", [
                        "model" => "gpt-4-turbo",
                        "messages" => [
                            ["role" => "system", "content" => "You are a quiz generator. Generate multiple-choice questions."],
                            [
                                "role" => "user",
                                "content" => "Generate 10 multiple-choice questions for the fields: $fieldNames. 
                        Each question should include:
                        - 'question' (text of the question)
                        - 'options' (an object with keys: A, B, C, D)
                        - 'answer' (A, B, C, or D)
                        - 'field' (the subject name from the provided list)
                        Do NOT repeat these questions: " . implode('; ', $recentQuestions) . ".
                        Return the questions in a JSON array."
                            ]
                        ],
                        "temperature" => 0.7,
                    ]);

            $data = $response->json();

            Storage::put('logs/openai/o_response_' . now()->format('YmdHis') . '.json', json_encode($data, JSON_PRETTY_PRINT));

            if (isset($data['choices'][0]['message']['content'])) {
                $rawContent = $data['choices'][0]['message']['content'];
                // **Remove Markdown JSON Formatting**
                $cleanJson = trim(str_replace(["```json", "```"], "", $rawContent));

                // **Decode JSON**
                $questionsData = json_decode($cleanJson, true);
                Storage::put('logs/content/content_' . now()->format('YmdHis') . '.json', contents: json_encode($questionsData, JSON_PRETTY_PRINT));

                if (is_array($questionsData) && count($questionsData) > 0) {
                    $questions = [];

                    foreach ($questionsData as $questionData) {
                        if (!isset($questionData['question'], $questionData['options']['A'], $questionData['options']['B'], $questionData['answer'], $questionData['field'])) {
                            Storage::put("logs/questions_invalid_" . now()->format('YmdHis') . '.json', json_encode($questionData, JSON_PRETTY_PRINT));
                            continue;
                        }

                        $fieldId = $fieldMap[$questionData['field']] ?? null;

                        if (!$fieldId) {
                            Storage::put('logs/openai_field_mapping_error_' . now()->format('YmdHis') . '.log', "Field not found: " . $questionData['field']);
                            continue;
                        }
                        $question = Question::create([
                            'field_id' => $fieldId,
                            'user_id' => $userId,  // Store the associated user ID
                            'question' => $questionData['question'],
                            'a' => $questionData['options']['A'],
                            'b' => $questionData['options']['B'],
                            'c' => $questionData['options']['C'] ?? null,
                            'd' => $questionData['options']['D'] ?? null,
                            'answer' => $questionData['answer'],
                        ]);

                        $questions[] = $question;
                    }
                    $fileName = 'questions_' . now()->format('YmdHis') . '.json';
                    Storage::put("questions/{$fileName}", json_encode($questions, JSON_PRETTY_PRINT));

                    return $questions;
                }
            }

        } catch (\Exception $e) {
            Storage::put('logs/openai_error_' . now()->format('YmdHis') . '.log', $e->getMessage());

            $savedQuestions = Question::whereIn('field_id', $fields)
                ->inRandomOrder()
                ->take(10)
                ->get();

            return $savedQuestions;
        }


        $savedQuestions = Question::whereIn('field_id', $fields)
            ->inRandomOrder()
            ->take(10)
            ->get();

        return $savedQuestions;
    }


    public function startQuiz(Request $request)
    {
        try {



            $user = User::where("id", auth()->id())->with("fields")->firstOrFail();
            $fieldIds = $user->fields->pluck('id')->toArray();

            $questions = $this->generateAndSendQuestions(2, $fieldIds);

            if ($questions instanceof \Illuminate\Http\JsonResponse) {
                return $questions; // Return the error response if generation failed
            }

            if ($questions instanceof \Illuminate\Http\Response) {
                $questions = json_decode($questions->getContent(), true);
            }

            if (!is_array($questions) || empty($questions)) {
                return response()->json(["error" => "No questions generated."], 500);
            }

            $questionsWithoutAnswers = [];
            $answers = [];

            foreach ($questions as $question) {
                $questionsWithoutAnswers[] = new QuestionResource($question);
                $answers[] = $question->answer ?? null;
            }

            // Initialize correct and incorrect answer counts
            $correctCount = 0;
            $incorrectCount = 0;

            // Generate a token with the questions and current index
            $payload = [
                'questions' => $questionsWithoutAnswers,
                'answers' => $answers, // Include the correct answers in the payload
                'current_question_index' => 0,
                'correct_count' => $correctCount,
                'incorrect_count' => $incorrectCount,
                'quiz_start_time' => null,
                'is_done' => false, // Initially false; will be updated later
                "question_length" => count($questionsWithoutAnswers)

            ];
            // $token = "";
            $token = JWTAuth::customClaims($payload)->fromUser(auth()->user());

            // Return the token and the first question
            return response()->json([
                'token' => $token,
                'question' => $questionsWithoutAnswers[0], // Return the first question
                'current_question_index' => 0,
                "question_length" => count($questionsWithoutAnswers)
            ]);
        } catch (\Exception $e) {
            // Log the exception message and stack trace
            Log::error('Error starting quiz: ' . $e->getMessage(), [
                'exception' => $e,
                'user_id' => auth()->id(),
                'request_data' => $request->all(),
            ]);

            // Optionally, return a response with a 500 status code and error message
            return response()->json([
                'error' => 'An error occurred while starting the quiz.',
                'message' => $e->getMessage()
            ], 500);
        }
    }



    public function answerQuestion(Request $request)
    {
        $request->validate([
            'token' => 'required|string',
            'answer' => 'required|string',
        ]);

        // Get the token from the request
        $token = $request->input('token');

        // Parse the token
        $payload = JWTAuth::setToken($token)->getPayload();

        // Extract payload data
        $questions = $payload->get('questions');
        $answers = $payload->get('answers');
        $currentIndex = $payload->get('current_question_index');
        $correctCount = $payload->get('correct_count');
        $incorrectCount = $payload->get('incorrect_count');
        $quizStartTime = $payload->get('quiz_start_time');
        $isDone = $payload->get('is_done'); // Correctly retrieve the is_done flag
        $questionsLength = $payload->get('question_length');

        // If quiz_start_time is null, this is the first answer
        if (is_null($quizStartTime)) {
            $quizStartTime = Carbon::now()->timestamp; // Set start time
        }

        // Check if token is expired
        $currentTimestamp = Carbon::now()->timestamp;
        if (($currentTimestamp - $quizStartTime) > self::TIME_LIMIT) { // Check if the quiz time has expired
            return response()->json([
                'message' => 'Token expired.',
            ], 401);
        }

        // Prevent re-answering the same question or resubmitting after quiz completion
        if ($isDone) {
            return response()->json([
                'message' => 'Quiz already completed.',
            ], 401);
        }

        if ($currentIndex != $payload->get('current_question_index')) {
            return response()->json([
                'message' => 'Question already answered ',
            ], 401);
        }

        // Validate the answer
        $answer = $request->input('answer');
        $correctAnswer = $answers[$currentIndex]; // Get the correct answer

        // Check answer correctness and update counts
        $isCorrect = (strtolower(trim($answer)) == strtolower(trim($correctAnswer)));
        if ($isCorrect) {
            $correctCount++;
        } else {
            $incorrectCount++;
        }

        // Increment the current question index
        $currentIndex++;

        // Check if the quiz is finished (quiz has exactly 10 questions, so the last index is 9)
        if ($currentIndex == $questionsLength) {
            // Mark quiz as done and calculate the final score
            $newPayload = [
                'questions' => $questions,
                'answers' => $answers,
                'current_question_index' => $currentIndex,
                'correct_count' => $correctCount,
                'incorrect_count' => $incorrectCount,
                'quiz_start_time' => $quizStartTime,
                'is_done' => true, // Set is_done to true after the last question
            ];

            $newToken = JWTAuth::customClaims($newPayload)->fromUser(auth()->user());

            // Calculate final score


            $score = $correctCount * $questionsLength;
            // $score = $correctCount * 10; // Assuming 20 points per correct answer
            $user = User::find(auth()->id());
            SaveMonthlyStats::dispatchAfterResponse($user, $correctCount, $incorrectCount, $questionsLength);

            return response()->json([
                'message' => 'Quiz completed.',
                'is_correct' => $isCorrect,
                'correct_count' => $correctCount,
                // 'correct_count' => $correctCount,
                'jobs' => $score,
                'incorrect_count' => $incorrectCount,
                'token' => $newToken,
            ], 201);
        } else {
            $newPayload = [
                'questions' => $questions,
                'answers' => $answers,
                'current_question_index' => $currentIndex,
                //'correct_count' => $correct,
                'correct_count' => $correctCount,
                'incorrect_count' => $incorrectCount,
                'quiz_start_time' => $quizStartTime,
                'is_done' => false, // Quiz is not yet done
            ];

            $newToken = JWTAuth::customClaims($newPayload)->fromUser(auth()->user());

            // Send the next question
            $nextQuestion = $questions[$currentIndex];
            return response()->json([
                'token' => $newToken,
                'next_question' => $nextQuestion,
                'is_correct' => $isCorrect,
                'current_question_index' => $currentIndex,
                'correct_count' => $correctCount,
            ]);
        }
    }


}