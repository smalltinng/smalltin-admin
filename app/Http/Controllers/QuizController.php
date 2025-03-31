<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Http\Resources\QuestionResource;
use Illuminate\Support\Carbon;
use App\Models\MonthlyStats;
use App\Jobs\SaveMonthlyStats;
use App\Models\Field;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class QuizController extends Controller
{
    const TIME_LIMIT = 80; // 50 seconds for 1.20 minutes
    public function startQuiz(Request $request)
    {
        $user = User::where("id", auth()->id())->with("fields", "subfields")->firstOrFail();

        $fieldIds = $user->fields->pluck('name')->toArray();

        $questions = $this->generateAndSendQuestions($fieldIds);
        // if ($questions->isEmpty) {
        //     $questions = Question::whereIn('field_id', $fieldIds)
        //         ->orWhereIn('sub_fields_id', $subfieldIds)
        //         ->inRandomOrder()
        //         ->take(10)
        //         ->get();
        // }
        // // Fetch questions based on field_id and subfield_id


        // Fallback: If no questions found, fetch specific or random questions
        // if ($questions->isEmpty()) {
        //     $questions = Question::whereIn('id', [16, 17, 18]) // Specific fallback IDs
        //         ->orWhere(function ($query) {
        //             $query->inRandomOrder();
        //         })
        //         ->take(10)
        //         ->get();
        // }


        // Create an array to store questions without answers and their correct answers
        $questionsWithoutAnswers = [];
        $answers = [];

        foreach ($questions as $question) {
            $questionsWithoutAnswers[] = new QuestionResource($question); // Assuming this hides the answer
            $answers[] = $question->answer; // Encrypt and store the correct answers
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
            'is_done' => false // Initially null; will be set when the first answer is received
        ];

        $token = JWTAuth::customClaims($payload)->fromUser($user);

        // Return the token and the first question
        return response()->json([
            'token' => $token,
            'question' => $questionsWithoutAnswers[0], // Return the first question without the answer
            'current_question_index' => 0,
        ]);
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
        $isCorrect = ($answer == $correctAnswer);
        if ($isCorrect) {
            $correctCount++;
        } else {
            $incorrectCount++;
        }

        // Increment the current question index
        $currentIndex++;

        // Check if the quiz is finished (quiz has exactly 10 questions, so the last index is 9)
        if ($currentIndex == 10) {
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
            $correct = 0;
            if ($correctCount >= 8 && $correctCount < 10) {
                $correct = $correctCount - 2;
            } else if ($correctCount >= 6 && $correctCount <= 7) {
                $correct = $correctCount - 3;
            } else {
                $correct = $correctCount;
            }
            $score = $correct * 10;
            // $score = $correctCount * 10; // Assuming 20 points per correct answer
            $user = User::find(auth()->id());
            SaveMonthlyStats::dispatchAfterResponse($user, $correctCount, $incorrectCount, 10);

            return response()->json([
                'message' => 'Quiz completed.',
                'is_correct' => $isCorrect,
                'correct_count' => $correct,
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

    private function generateAndSendQuestions($fields)
    {
        $apiKey = env('OPENAI_API_KEY');

        // Convert the field array to a comma-separated string
        $fieldNames = Field::whereIn('id', $fields)->pluck('name')->implode(', ');

        try {
            $response = Http::withHeaders([
                "Authorization" => "Bearer " . $apiKey,
                "Content-Type" => "application/json",
            ])->post("https://api.openai.com/v1/chat/completions", [
                        "model" => "gpt-4-turbo",
                        "messages" => [
                            ["role" => "system", "content" => "You are a quiz generator. Generate multiple-choice questions."],
                            ["role" => "user", "content" => "Generate 10 multiple-choice questions for the fields: $fieldNames. Format each question as an object in a JSON array with 'question', 'options' (keys: A, B, C, D), and 'answer' (A, B, C, or D)."]
                        ],
                        "temperature" => 0.7,
                    ]);

            $data = $response->json();

            // **Log the raw response for debugging**
            Storage::put('logs/openai_response_' . now()->format('YmdHis') . '.json', json_encode($data, JSON_PRETTY_PRINT));

            if (isset($data['choices'][0]['message']['content'])) {
                $questionsData = json_decode($data['choices'][0]['message']['content'], true);

                if (is_array($questionsData) && count($questionsData) > 0) {
                    $questions = [];

                    // Get the field IDs properly
                    $fieldMap = Field::whereIn('id', $fields)->pluck('id', 'name');

                    foreach ($questionsData as $questionData) {
                        if (!isset($questionData['question'], $questionData['options']['A'], $questionData['options']['B'], $questionData['answer'])) {
                            continue;
                        }

                        // Assign the correct field_id based on the question's topic (fallback to first field)
                        $fieldId = $fieldMap->first();

                        // Save to database
                        $question = Question::create([
                            'field_id' => $fieldId,
                            'question' => $questionData['question'],
                            'a' => $questionData['options']['A'],
                            'b' => $questionData['options']['B'],
                            'c' => $questionData['options']['C'] ?? null,
                            'd' => $questionData['options']['D'] ?? null,
                            'answer' => $questionData['answer'],
                        ]);

                        $questions[] = $question;
                    }

                    // Save questions to file
                    $fileName = 'questions_' . now()->format('YmdHis') . '.json';
                    Storage::put("questions/{$fileName}", json_encode($questions, JSON_PRETTY_PRINT));

                    return collect($questions);
                }
            }
        } catch (\Exception $e) {
            // **Log the exception for debugging**
            Storage::put('logs/openai_error_' . now()->format('YmdHis') . '.log', $e->getMessage());
            return response()->json(["error" => "An error occurred while generating questions."], 500);
        }

        // **Fallback: Retrieve questions from the saved database**
        $savedQuestions = Question::whereIn('field_id', $fields)
            ->inRandomOrder()
            ->take(10)
            ->get();

        if ($savedQuestions->isEmpty()) {
            return response()->json(["message" => "No questions available in the database."], 404);
        }

        return $savedQuestions;
    }


}