<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\photosController;
use App\Http\Controllers\eventsController;
use App\Http\Controllers\luminariesController;
use App\Http\Controllers\galleryController;
use App\Http\Controllers\mentorshipController;
use App\Http\Controllers\NewsletterController;



Route::get('/', function () {
    return view('welcome');
});
Route::resource('photos', photosController::class);
Route::resource('events', eventsController::class);
Route::resource('gallery', galleryController::class);
Route::resource('luminaries', luminariesController::class);
Route::resource('mentorship', mentorshipController::class);
Route::resource('Newsletter', NewsletterController::class);
Route::get('/test-sqlite', function () {
    \Illuminate\Support\Facades\DB::table('sqlite_master')->get();
    return 'SQLite is working!';
});
