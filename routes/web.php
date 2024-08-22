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
use App\Http\Controllers\ConversationController;
use App\Http\Controllers\FieldsController;
use App\Http\Controllers\LeaderboardController;

Route::get('/', function () {
    return Inertia::render('Welcome');
});


Route::get('/admin/login', [AdminController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'store'])->name('admin.login');

Route::group(['prefix' => 'admin'], function () {
   
 
    Route::middleware('admin')->group(function () {
        Route::get('/details', [AdminController::class, 'getAdminDetails']);
        Route::get('/dashboard', [AdminController::class, 'dashboard'] )->name('admin.dashboard');
        Route::get('/transactions', [TransactionController::class, 'transaction'] )->name('admin.transaction');
        Route::get('/ladder-board', [LadderController::class, 'ladder_board'] )->name('admin.ladder');
        Route::get('/messages', [MessagesController::class, 'message'] )->name('admin.messages');
        Route::get('/fields', [FieldsController::class, 'show'] )->name('admin.fields');
        Route::get('/all-fields', [FieldsController::class, 'getForadmin'] )->name('admin.fields');
        Route::post('/create-field', [FieldsController::class, 'create'] );
        Route::delete('/delete-field/{id}', [FieldsController::class, 'deleteField'] );
        Route::delete('/delete-subfield/{id}', [FieldsController::class, 'deleteSubField'] );
        Route::post('/update-field/{id}', [FieldsController::class, 'updateField'] )->name('admin.update.field');
        Route::post('/create-subfield', [FieldsController::class, 'createSubField'] )->name('admin.create.subfield');
        Route::post('/update-subfield/{id}', [FieldsController::class, 'updateSubField'] )->name('admin.update.subfield');
        
        Route::get('/question-bank', [QuestionController::class, 'index'] )->name('admin.questionbank');
        Route::get('/all-user', [UsersController::class, 'index'] )->name('admin.alluser');
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
        Route::get("/questions", [QuestionController::class, "get_all_question"]);

        Route::get("/questions-query", [QuestionController::class, "getQuestionByQuery"]);
        Route::delete("/question/{id}", [QuestionController::class, "destroy"]);
        Route::post("/question", [QuestionController::class, "create"]);
        Route::put("/edit-question/{id}", [QuestionController::class, "update"]);
        Route::get("/users", [AdminController::class, "getAllUser"]);
        Route::get('/leaderboard/realtime', [LeaderboardController::class, 'realTime']);
        Route::get('/leaderboard/weekly', [LeaderboardController::class, 'weeklyTop']);
        Route::get('/leaderboard/last-week', [LeaderboardController::class, 'lastWeekTop']);
        Route::get('/chats', [ConversationController::class, 'index'])->name('admin.chats');
        Route::get('/unchats', [ConversationController::class, 'unAttendTo'])->name('admin.chats');
        Route::get('/chats/{id}', [ConversationController::class, 'getMessages']);
        Route::post('/chats/{conversation}/assign', [ConversationController::class, 'assignToAdmin']);
        Route::post('/chats/{conversation}/message', [ConversationController::class, 'sendMessageAsAdmin']);

    });
    

    // Route::get('/{any}', function () {
    //     return Inertia::render('App');
    // })->where('any', '.*');



});

