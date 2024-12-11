<?php

use App\Http\Controllers\TwoFactorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\NewsletterController;

// Home Route
Route::get('/', function () {
    return view('home');
});

// Authentication Routes
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


// Dashboard Route (only accessible after successful 2FA verification)


use App\Http\Controllers\GalleryController;


// Gallery Routes
Route::middleware(['auth'])->group(function () {
    // Display all galleries
    Route::get('/galleries', [GalleryController::class, 'index'])->name('galleries.index');

    // Show the gallery creation form
    Route::get('/galleries/create', [GalleryController::class, 'create'])->name('galleries.create');

    // Store a new gallery
    Route::post('/galleries', [GalleryController::class, 'store'])->name('galleries.store');

    // Show the gallery edit form
    Route::get('/galleries/{gallery}/edit', [GalleryController::class, 'edit'])->name('galleries.edit');

    // Update a gallery
    Route::put('/galleries/{gallery}', [GalleryController::class, 'update'])->name('galleries.update');

    // Delete a gallery
    Route::delete('/galleries/{gallery}', [GalleryController::class, 'delete'])->name('galleries.delete');
});



use App\Http\Controllers\PhotosController;


// Photo Routes
Route::middleware(['auth'])->group(function () {
    // Show the gallery with images
    Route::get('/gallery/{gallery}', [PhotosController::class, 'show'])->name('photos.show');

    // Show a specific image from the gallery
    Route::get('/gallery/{gallery}/photo/{photo}', [PhotosController::class, 'image'])->name('photos.image');

    // Show the form to upload photos for a specific gallery
    Route::get('/gallery/{gallery}/photos/create', [PhotosController::class, 'create'])->name('photos.create');

    // Store newly uploaded photos in the specific gallery
    Route::post('/gallery/{gallery}/photos', [PhotosController::class, 'store'])->name('photos.store');

    // Show the form to edit a photo in a specific gallery
    Route::get('/gallery/{gallery}/photos/{photo}/edit', [PhotosController::class, 'edit'])->name('photos.edit');

    Route::delete('/gallery/{gallery}', [GalleryController::class, 'delete'])->name('gallery.destroy');
});

// Newsletter Routes
Route::middleware(['auth'])->group(function () {
    // Show the form to create a new newsletter
    Route::get('/newsletter/create', [NewsletterController::class, 'create'])->name('newsletter.create');

    // Store a new newsletter
    Route::post('/newsletter/store', [NewsletterController::class, 'store'])->name('newsletter.store');

    // Display all newsletters
    Route::get('/newsletters', [NewsletterController::class, 'showNewsletters'])->name('newsletters.index');

    // Display the newsletters in a folder
    Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter');

    // Display a single newsletter article
    Route::get('/newsletter/{id}', [NewsletterController::class, 'show'])->name('newsletter.show');
});
