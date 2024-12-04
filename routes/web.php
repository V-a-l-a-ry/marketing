<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\photosController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\NewsletteruploadController;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('backoffice')->group(function () {
    Route::resource('gallery', GalleryController::class);
    Route::get('gallery/{gallery}/photos', [PhotosController::class, 'index'])->name('gallery.photos');
    Route::post('gallery/{gallery}/photos', [PhotosController::class, 'store'])->name('photos.store');
    Route::delete('photos/{photo}', [PhotosController::class, 'destroy'])->name('photos.destroy');
    Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter');
    Route::get('/newsletters/create', [NewsletterController::class, 'create'])->name('newsletter.create');
    Route::post('/newsletters/upload', [NewsletterController::class, 'store'])->name('newsletter.store');
    //Route::get('/newsletters/upload', [NewsletterController::class, 'create'])->name('backoffice.newsletter-upload');
    Route::get('/newsletters', [NewsletterController::class, 'showNewsletters']);
    Route::post('/upload', [UploadController::class, 'upload'])->name('upload');
    
});







Route::get('/article', function () {
    return view('article');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/newsletter', function () {
    return view('newsletter');
});
