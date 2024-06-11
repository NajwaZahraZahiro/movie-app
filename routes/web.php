<?php
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/products', [ProductController::class, 'index']);

Route::get('/genres', [GenreController::class, 'index']);



Route::resource('/movies', MovieController::class);

Route::resource('/reviews', ReviewController::class);

Route::resource('/genres', GenreController::class);

