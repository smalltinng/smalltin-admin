<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Tymon\JWTAuth\Facades\JWTAuth;

class QuizController extends Controller

{
    const TIME_LIMIT = 80; // 80 seconds for 1.20 minutes
    public function startQuiz(Request $request)
    {
        // Fetch 10 random questions
        $questions = Question::inRandomOrder()->take(10)->get();
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
        $token = JWTAuth::customClaims($payload)->fromUser(Auth::user());

        // Return the token and the first question
        return response()->json([
            'token' => $token,
            'question' => $questions[0]
        ]);
    }

    public function answerQuestion(Request $request)
    {
        // Get the token from the request
        $token = $request->input('token');

        // Parse the token
        $payload = JWTAuth::setToken($token)->getPayload();



        $questions = $payload->get('questions');
        $currentIndex = $payload->get('current_question_index');
        $correctCount = $payload->get('correct_count');
        $incorrectCount = $payload->get('incorrect_count');

        // Validate the answer (optional, based on your logic)
        $answer = $request->input('answer');
        $correctAnswer = $questions[$currentIndex]['answer'];


        // Check answer correctness and update counts
        if ($answer === $correctAnswer) {
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
