<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\photosController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('photos', photosController::class);