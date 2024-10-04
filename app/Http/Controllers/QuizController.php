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
class QuizController extends Controller

{
    const TIME_LIMIT = 80; // 50 seconds for 1.20 minutes
    public function startQuiz(Request $request)
    {
        $user = User::where("id", auth()->id())->with("fields", "subfields")->firstOrFail();
    
        $fieldIds = $user->fields->pluck('id')->toArray();
        $subfieldIds = $user->subfields->pluck('id')->toArray();
    
        // Fetch questions based on field_id and subfield_id
        $questions = Question::whereIn('field_id', $fieldIds)
            ->orWhereIn('sub_fields_id', $subfieldIds)
            ->inRandomOrder()
            ->take(10)
            ->get();

 // Fallback: If no questions found, fetch specific or random questions
 if ($questions->isEmpty()) {
    $questions = Question::whereIn('id', [16, 17, 18]) // Specific fallback IDs
        ->orWhere(function ($query) {
            $query->inRandomOrder();
        })
        ->take(10)
        ->get();
}

    
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
            'is_done'=> false // Initially null; will be set when the first answer is received
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
        $isDone = $payload->get('quiz_start_time');
    
        // If quiz_start_time is null, this is the first answer
        if (is_null($quizStartTime)) {
            $quizStartTime = Carbon::now()->timestamp; // Set start time
        }
    
  
        // Check if token is expired
        $currentTimestamp = Carbon::now()->timestamp;
        if (($currentTimestamp - $quizStartTime) > self::TIME_LIMIT) { // Check if 60 seconds have passed
            return response()->json([
                'message' => 'Token expired.',
            ], 401);
        }
        if ($currentIndex != $payload->get('current_question_index')) {
            return response()->json([
                'message' => 'Question already answered or invalid index.',
            ], 400);
        }
        if ($payload->get('is_done')) {
            return response()->json([
                'message' => 'Questions already answered Start a New Atterm',
            ], 400);
        }
        // Validate the answer
        $answer = $request->input('answer');
        $correctAnswer = $answers[$currentIndex]; // Decrypt the correct answer
    
        // Check answer correctness and update counts
        $isCorrect = ($answer == $correctAnswer);
        if ($isCorrect) {
            $correctCount++;
        } else {
            $incorrectCount++;
        }
    
        // Increment the current question index
        $currentIndex++;
        if ($currentIndex == 9 ) {
            $newPayload = [
                'questions' => $questions,
                'answers' => $answers,
                'current_question_index' => $currentIndex,
                'correct_count' => $correctCount,
                'incorrect_count' => $incorrectCount,
                'quiz_start_time' => $quizStartTime, // Include start time in the new token
                'is_done'=> true
            ];
          
        
        } else {
            $newPayload = [
                'questions' => $questions,
                'answers' => $answers,
                'current_question_index' => $currentIndex,
                'correct_count' => $correctCount,
                'incorrect_count' => $incorrectCount,
                'quiz_start_time' => $quizStartTime,
                'is_done'=> false  // Include start time in the new token
            ];
        }
        // Generate a new token with the updated index
        
        $newToken = JWTAuth::customClaims($newPayload)->fromUser(auth()->user());
        if ($currentIndex < count($questions)) {
            
            $nextQuestion = $questions[$currentIndex];
            return response()->json([
                'token' => $newToken,
                'next_question' => $nextQuestion,
                'is_correct' => $isCorrect,
                "current_question_index" => $currentIndex,
                ""=> $correctCount,
            ]);
        } else {
            // Calculate final score based on correct and incorrect counts
            $score =  $correctCount * 20;
            $user = User::find(auth()->id());

            SaveMonthlyStats::dispatchAfterResponse($user, $correctCount, $incorrectCount, count($questions));
            return response()->json([
                'message' => 'Quiz completed.',
                'is_correct' => $isCorrect,
                'correct_count' => $correctCount,
                'jobs' => $score,
                'incorrect_count' => $incorrectCount,
            ], 201);
        }
    }
    
    
}    