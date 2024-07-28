<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\LadderController;
use App\Http\Controllers\Admin\MessagesController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\LeaderboardController;

Route::get('/', function () {
    return Inertia::render('Welcome');
});


Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'store'])->name('admin.login');

Route::group(['prefix' => 'admin'], function () {
   
 
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'] )->name('admin.dashboard');
        Route::get('/transactions', [TransactionController::class, 'transaction'] )->name('admin.transaction');
        Route::get('/ladder-board', [LadderController::class, 'ladder_board'] )->name('admin.ladder');
        Route::get('/messages', [MessagesController::class, 'message'] )->name('admin.messages');
        Route::get('/question-bank', [QuestionController::class, 'index'] )->name('admin.questionbank');
        Route::get('/all-user', [UsersController::class, 'index'] )->name('admin.alluser');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get("/questions", [QuestionController::class, "get_all_question"]);
        Route::get("/users", [AdminController::class, "getAllUser"]);
        Route::get('/leaderboard/realtime', [LeaderboardController::class, 'realTime']);
Route::get('/leaderboard/weekly', [LeaderboardController::class, 'weeklyTop']);
Route::get('/leaderboard/last-week', [LeaderboardController::class, 'lastWeekTop']);
    });
    

    // Route::get('/{any}', function () {
    //     return Inertia::render('App');
    // })->where('any', '.*');



});

