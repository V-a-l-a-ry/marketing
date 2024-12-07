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
