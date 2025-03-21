<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [MovieController::class, 'search'])->name('movies.search');
Route::get('/movie/{id}', [MovieController::class, 'details'])->name('movies.details');
