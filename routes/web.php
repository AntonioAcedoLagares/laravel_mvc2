<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas/index', [PeliculasController::class, 'index']);
