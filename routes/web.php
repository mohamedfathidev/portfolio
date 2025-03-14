<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\WebSiteController;
use App\Http\Controllers\Dashboard\ProjectController;
use App\Http\Controllers\Dashboard\NotificationController;


require_once __DIR__.'/auth.php';

// Dashboard
Route::prefix('dashboard')->middleware(['auth', 'verified'])->group(function() {
    Route::get('/home', function() {
        return view('dashboard.index');
    });

    // Notifications s
    Route::get('notifications', [NotificationController::class, 'index'])->name('notifications');
    Route::put('notifications/read/{notificationID}', [NotificationController::class, 'read'])->name('notifications.read');

    Route::resource('/projects', ProjectController::class);
    // Route::resource('/articles', ArticleController::class);
    // Route::resource('/resume', ResumeController::class);
    // Route::resource('/contact', ResumeController::class);

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Website Routes
Route::controller(WebSiteController::class)->group(function () {
    Route::get('/', 'homeContent');
    Route::get('/projects', 'projects');
    Route::get('/resume', 'resume');
    Route::get('/contact', 'contact');
    Route::get('/articles', 'articles');
});



