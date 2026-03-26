<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeliculasController;
use App\Http\Controllers\ActoresController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/peliculas/index', [PeliculasController::class, 'index']);

Route::get('/peliculas/create', [PeliculasController::class, 'create']);
Route::post('/peliculas/create', [PeliculasController::class, 'store']);

Route::get('/peliculas/show/{id}', [PeliculasController::class, 'show']);
Route::get('/peliculas/{id}/destroy', [PeliculasController::class, 'destroy']);
Route::get('/peliculas/edit/{id}', [PeliculasController::class, 'edit']);
Route::post('/peliculas/edit/{id}', [PeliculasController::class, 'update']);


Route::get('/actores/index', [ActoresController::class, 'index']);

Route::get('/actores/create', [ActoresController::class, 'create']);
Route::post('/actores/create', [ActoresController::class, 'store']);

Route::get('/actores/{id}/destroy', [ActoresController::class, 'delete']);
