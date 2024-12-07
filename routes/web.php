<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\photosController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\NewsletteruploadController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('backoffice.galleries');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/galleries',[GalleryController::class,'index']);

Route::get('/gallery/{gallery}/photos/{photo}', [photosController::class, 'image']);

Route::get('/gallery/create', [GalleryController::class, 'create']);
Route::post('/gallery',[GalleryController::class,'store']);
Route::get('/gallery/{gallery}/edit', [GalleryController::class, 'edit']);
Route::put('/gallery/{gallery}',[GalleryController::class, 'update']);
Route::delete('/gallery/{gallery}',[GalleryController::class, 'delete']);


Route::get('/gallery/{gallery}/upload', [photosController::class, 'create']);
Route::post('/gallery/{gallery}/images', [photosController::class, 'store']);
Route::get('/gallery/{gallery}/photos/{photo}/edit', [photosController::class, 'edit']);

Route::get('/gallery/{gallery}', [photosController::class, 'show']);


Route::get('/article', function () {
    return view('article');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/newsletter', function () {
    return view('newsletter');
});

use App\Http\Controllers\BackofficeController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [BackofficeController::class, 'dashboard'])->name('dashboard');
    // Other backoffice routes
});
