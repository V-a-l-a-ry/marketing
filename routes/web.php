<?php

use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\RegisterController;


use App\Http\Controllers\NewsletterController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;
use App\Models\Newsletter;

// Route::prefix('admin')->group(function () {
//     Route::get('/login', [LoginController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('/login', [LoginController::class, 'login']);
//     Route::post('/logout', [LoginController::class, 'logout'])->name('admin.logout');

//     Route::middleware('auth:admin')->group(function () {
//         Route::get('/dashboard', function () {
//             return view('admin.dashboard'); // Create this dashboard view
//         })->name('admin.dashboard');
//     });
// });


// Home Route

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');






Route::get('/newsletter/create', [NewsletterController::class, 'create'])->name('newsletter.create');
Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletters.store');


Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
Route::post('/event/store', [EventController::class, 'store'])->name('event.store');




Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/library', function () {
    return view('contentlibrary');
});


Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Show the login form
Route::get('/admin/login', [LoginController::class, 'show'])->name('login');

// Handle login form submission
Route::post('/admin/login', [LoginController::class, 'login']);

// Handle logout
Route::post('/admin/logout', [LoginController::class, 'logout'])->name('logout');


// Route::get('/event-upload', function () {
//     return view('forms.event');
// });

// Route::get('/article-upload', function () {
//     return view('forms.newsletter');
// });



Route::get('/events', [EventController::class, 'index'])->name('events.index');

Route::get('/newsletters', [NewsletterController::class, 'index'])->name('newsletter.index');


Route::delete('/events/{id}', [EventController::class, 'destroy'])->name('events.destroy');
