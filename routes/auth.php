<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\RegisterController;


Route::prefix('dashboard')->group(function() {

    // Login
    Route::get('/login-form', [LoginController::class, 'loginForm'])->name('login')->middleware('guest'); // Custom GUEST middleware 
    Route::post('/login', [LoginController::class, 'checkLoginData'])->name('check-login');


    // Registeration
    Route::get('/register-form', [RegisterController::class, 'registerForm'])->name('register')->middleware('guest');
    Route::post('/register', [RegisterController::class, 'submitRegisterData'])->name('check-register');

    // Verification 
    Route::get('verify-email/{token}', [RegisterController::class, 'verifyEmail']);

});