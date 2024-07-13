<?php

use App\Http\Controllers\FieldsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

Route::get('/user', [UserController::class, "index"]
)->middleware('auth:sanctum');

Route::post('/login', [UserController::class, "login"]);
Route::post('/forget-password', [UserController::class, "forget_password"]);
Route::post('/password', [UserController::class, "login_with_password"]);
Route::post("/resend-otp", [UserController::class, 'resend_otp']);
Route::post("/verify-email", [UserController::class, 'verify_email']);
Route::get("/fields", [FieldsController::class, "index"]);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::post("/update", [UserController::class, 'update']);
    Route::post("/logout", [UserController::class, 'logout']);
    Route::post('/start-quiz', [QuizController::class, 'startQuiz']);
    Route::post('/answer-question', [QuizController::class, 'answerQuestion']);
});
