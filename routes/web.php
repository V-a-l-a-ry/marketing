<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\GalleryController;
use App\Models\Newsletter;

// ------------------------------
// Public Routes
// ------------------------------

// Redirect '/' to login page if user is not authenticated
Route::get('/', function () {
    return Auth::check() 
        ? redirect()->route('admin.dashboard') 
        : redirect()->route('login');
})->name('home');

// Login Routes
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// User Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// ------------------------------
// Protected Routes (Authenticated Users)
// ------------------------------
Route::middleware(['auth'])->prefix('admin')->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Logout Route
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Newsletter Routes
    Route::get('/newsletters', [NewsletterController::class, 'index'])->name('newsletter.index');
    Route::get('/newsletter/create', [NewsletterController::class, 'create'])->name('newsletter.create');
    Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletters.store');
    Route::delete('/newsletters/{id}', [NewsletterController::class, 'destroy'])->name('newsletters.destroy');
    

    // Event Routes
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/event/store', [EventController::class, 'store'])->name('event.store');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
    

    // User Management
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    // Content Library
    Route::get('/content', [ContentController::class, 'index'])->name('content.index');
    Route::get('/content/create', [ContentController::class, 'create'])->name('content.create');
    Route::post('/content', [ContentController::class, 'store'])->name('content.store');

    // Gallery Routes
    Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
    Route::delete('/galleries/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');
});

// ------------------------------
// Fallback Route
// ------------------------------
Route::fallback(function () {
    return view('errors.404');
});
