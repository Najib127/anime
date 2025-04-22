<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AnimeController; 
 
// Route untuk mendapatkan semua tim 
Route::get('api/animes', [AnimeController::class, 'getAllAnimes']); 

Route::get('/', function () {
    return view('welcome');
});
