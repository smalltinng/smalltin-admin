<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use App\Http\Resources\QuestionResource;

class QuizController extends Controller

{
    const TIME_LIMIT = 80; // 80 seconds for 1.20 minutes
    public function startQuiz(Request $request)
    {
        $user = User::where("id", auth()->id())->with("fields", "subfields")->firstOrFail();
    
        $fieldIds = $user->fields->pluck('id')->toArray();
        $subfieldIds = $user->subfields->pluck('id')->toArray();
    
        // Fetch questions based on field_id and subfield_id
        $questions = Question::whereIn('field_id', $fieldIds)
            ->orWhereIn('subfield_id', $subfieldIds) // Updated to directly check subfield_id
            ->inRandomOrder()
            ->take(10)
            ->get();

            $questionsWithoutAnswers = $questions->map(function ($question) {
                return new QuestionResource($question);
            });
    
        // Initialize correct and incorrect answer counts
        $correctCount = 0;
        $incorrectCount = 0;
    
        // Generate a token with the questions and current index
        $payload = [
            'questions' => $questions,
            'current_question_index' => 0,
            'correct_count' => $correctCount,
            'incorrect_count' => $incorrectCount,
        ];
        $token = JWTAuth::customClaims($payload)->fromUser($user); // Use $user instead of Auth::user()
    
        // Return the token and the first question
        return response()->json([
            'token' => $token,
            'question' => $questionsWithoutAnswers->first() // Use first() instead of [0]
        ]);
    }
    

    public function answerQuestion(Request $request)
    {

    $request->validate([
        "token"=>"required|String",
        "answer"=>"required|String",
    ]);
        // Get the token from the request
        $token = $request->input('token');

        // Parse the token
        $payload = JWTAuth::setToken($token)->getPayload();



        $questions = $payload->get('questions');
        $currentIndex = $payload->get('current_question_index');
        $correctCount = $payload->get('correct_count');
        $incorrectCount = $payload->get('incorrect_count');

        // Validate the answer (optional, based on your logic)

        if (!isset($questions[$currentIndex]['answer'])) {
            return response()->json([
                'message' => 'The current question does not have an answer key.',
                'error' => 'Invalid question format',
            ], 400);
        }


        $answer = $request->input('answer');
        $correctAnswer = $questions[$currentIndex]['answer'];


        // Check answer correctness and update counts
        if ($answer == $correctAnswer) {
            $correctCount++;
            $isCorrect = true;
        } else {
            $incorrectCount++;
            $isCorrect = false;
        }

        // Increment the current question index
        $currentIndex++;

        // Generate a new token with the updated index
        $newPayload = [
            'questions' => $questions,
            'current_question_index' => $currentIndex,
            'correct_count' => $correctCount,
            'incorrect_count' => $incorrectCount,
        ];
        $newToken = JWTAuth::customClaims($newPayload)->fromUser(Auth::user());
        // Check if there are more questions
        if ($currentIndex < count($questions)) {
            $nextQuestion = $questions[$currentIndex];
            return response()->json([
                'token' => $newToken,
                'next_question' => $nextQuestion,
                'is_correct' => $isCorrect,
                'correct_count' => $correctCount,
                'incorrect_count' => $incorrectCount,
            ]);
        } else {
            return response()->json([
                'message' => 'Quiz completed.',
                'is_correct' => $isCorrect,
                'correct_count' => $correctCount,
                'incorrect_count' => $incorrectCount,
            ]);
        }
    }
}
