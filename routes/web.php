<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\EventController;
use App\Http\Controllers\admin\NewsletterController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\frontend\ExhibitController;
use App\Http\Controllers\admin\GalleryController;
use App\Http\Controllers\frontend\ArticleController;
use App\Http\Controllers\frontend\InfohubController;


// ------------------------------
// Auth Routes
// ------------------------------

// Login Routes
Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// User Registration Routes
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Password Reset Routes
Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.store');

// ------------------------------
// Protected Routes (Authenticated Users)
// ------------------------------
Route::middleware(['auth'])->prefix('admin')->group(function () {

    // ------------------------------
    // Dashboard Routes
    // ------------------------------
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // ------------------------------
    // Newsletter Routes
    // ------------------------------
    Route::get('/newsletters', [NewsletterController::class, 'index'])->name('newsletter.index');
    Route::get('/newsletter/create', [NewsletterController::class, 'create'])->name('newsletter.create');
    Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletters.store');
    Route::delete('/newsletters/{id}', [NewsletterController::class, 'destroy'])->name('newsletters.destroy');

    // ------------------------------
    // Event Routes
    // ------------------------------
    Route::get('/events', [EventController::class, 'index'])->name('events.index');
    Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/event/store', [EventController::class, 'store'])->name('event.store');
    Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');

    // ------------------------------
    // User Management Routes
    // ------------------------------
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

    // ------------------------------
    // Content Library Routes
    // ------------------------------
    Route::get('/content', [ContentController::class, 'index'])->name('content.index');
    Route::get('/content/create', [ContentController::class, 'create'])->name('content.create');
    Route::post('/content', [ContentController::class, 'store'])->name('content.store');

    // ------------------------------
    // Gallery Routes
    // ------------------------------
    Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');
    Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');
    Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');
    Route::get('/admin/galleries/{id}', [GalleryController::class, 'show'])->name('galleries.show');
    Route::delete('/galleries/{id}', [GalleryController::class, 'destroy'])->name('galleries.destroy');
    Route::post('galleries/{gallery}/images', [GalleryController::class, 'uploadImages'])->name('galleries.uploadImages');
});

// ------------------------------
// Public Non-Auth Routes
// ------------------------------

// InfoHub Routes
Route::get('/infohub', [InfohubController::class, 'index'])->name('infohub');

// Exhibit Routes
Route::get('/exhibits', [ExhibitController::class, 'index'])->name('exhibits.index');
Route::get('/exhibits/{gallery}', [ExhibitController::class, 'show'])->name('exhibits.show');

// Newsletter Article Routes
Route::get('/newsletters', [ArticleController::class, 'index'])->name('newsletters.index');
Route::get('newsletters/{newsletter}/download', [ArticleController::class, 'download'])->name('newsletters.download');

// Frontend Home Route
Route::get('/', function () {
    return view('frontend.home');
});

// ------------------------------
// Fallback Route
// ------------------------------
Route::fallback(function () {
    return view('errors.404');
});
