<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelicula;

class PeliculasController extends Controller
{
    public function index(){
        $peliculastodos = Pelicula::all();

        return view('peliculas.index',["peliculas"=>$peliculastodos]);
    }
}
