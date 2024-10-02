<?php

use App\Http\Controllers\ProfileController;
use App\Models\Setting;
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
Route::get('/privacy-policy', [AdminController::class, 'privacyPolicy'] )->name('admin.privacy');

Route::get('/download-app', function () {
    $filePath = public_path('downloads/smalltin.apk');
    
    // Check if the file exists
    if (file_exists($filePath)) {
        $setting = Setting::first(); // assuming you have only one row in the settings table
        $setting->increment('total_downloads');
        // If the file exists, return it as a downloadable response
       return response()->download($filePath, 'smalltin.apk', [
            'Content-Type' => 'application/vnd.android.package-archive'
        ]);
    } else {
        // If the file is not found, return a 404 or a custom message
        return response()->json(['message' => 'File not found.'], 404);
    }
});


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
        Route::get('/leaderboard/month', [LeaderboardController::class, 'weeklyTop']);
        Route::get('/leaderboard/last-month', [LeaderboardController::class, 'lastMonthTop']);
        Route::get('/chats', [ConversationController::class, 'index'])->name('admin.chats');
        Route::get('/unchats', [ConversationController::class, 'unAttendTo'])->name('admin.chats');
        Route::get('/chats/{id}', [ConversationController::class, 'getMessages']);
        Route::post('/chats/{conversation}/assign', [ConversationController::class, 'assignToAdmin']);
        Route::post('/chats/{conversation}/message', [ConversationController::class, 'sendMessageAsAdmin']);

        Route::post('/store', [AdminController::class, 'adminStore'])->name('admin.store');

        // Route to edit an admin's details (Form)
        Route::get('/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    
        // Route to update an admin
        Route::put('/{id}/update', [AdminController::class, 'adminUpdate'])->name('admin.update');
    
        // Route to delete an admin
        Route::delete('/{id}/delete', [AdminController::class, 'admindestroy'])->name('admin.delete');

    });
    

    // Route::get('/{any}', function () {
    //     return Inertia::render('App');
    // })->where('any', '.*');



});

