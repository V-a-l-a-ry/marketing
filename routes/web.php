<?php

use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Two-Factor Authentication (OTP-based)
Route::middleware(['auth'])->group(function () {
    // Send OTP to the user's email
    Route::get('twofactor/send', [TwoFactorController::class, 'sendOtp'])->name('twofactor.send');

    // Show OTP verification form
    Route::get('twofactor/verify', [TwoFactorController::class, 'showVerificationForm'])->name('twofactor.verify');

    // Verify the OTP
    Route::post('twofactor/verify', [TwoFactorController::class, 'verifyOtp'])->name('twofactor.verify');
});

// Dashboard Route (only accessible after successful 2FA verification)
Route::middleware(['auth', 'verified'])->get('/dashboard', function () {
    return view('gallery');
});
