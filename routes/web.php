<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\photosController;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix('backoffice')->group(function () {
    Route::resource('gallery', GalleryController::class);
    Route::get('gallery/{gallery}/photos', [PhotosController::class, 'index'])->name('gallery.photos');
    Route::post('gallery/{gallery}/photos', [PhotosController::class, 'store'])->name('photos.store');
    Route::delete('photos/{photo}', [PhotosController::class, 'destroy'])->name('photos.destroy');
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
