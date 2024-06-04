<?php
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/products', function () {
    return view('product');
});

Route::get('/genres', [GenreController::class, 'index']);
Route::get('/review', [ReviewController::class, 'index']);
Route::get('/movies', [MovieController::class, 'index']);


Route::post('/movies', [MovieController::class, 'store']);
Route::get('/movies/create', [MovieController::class, 'create']);
Route::delete('/movies/{movie}', [MovieController::class, 'destroy']);

Route::post('/review', [ReviewController::class, 'store']);
Route::get('/reviews/create', [ReviewController::class, 'create']);
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy']);

Route::post('/genres', [GenreController::class, 'store']);
Route::get('/genres/create', [GenreController::class, 'create']);
Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);