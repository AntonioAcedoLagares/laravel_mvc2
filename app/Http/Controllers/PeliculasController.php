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
    public function create(){
        return view('peliculas.create');
    }

    public function store(\Illuminate\Http\Request $request){
        $pelicula = new \App\Models\Pelicula();

        $pelicula->titulo = $request->input('titulo');
        $pelicula->pais = $request->input('pais');
        $pelicula->start_date = $request->input('start_date');
        $pelicula->nominaciones_oscar = $request->input('nominaciones_oscar');
        $pelicula->oscars_ganados = $request->input('oscars_ganados');
        $pelicula->save();

        return redirect('/peliculas/index');
    }
}
