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
        $actores = \App\Models\Actor::all();
        return view('peliculas.create', compact('actores'));
    }
    public function edit($id){
        $pelicula_singular = \App\Models\Pelicula::with('actores')->findOrFail($id);
        $actores = \App\Models\Actor::all();
        return view('peliculas.edit', ["pelicula"=>$pelicula_singular,"actores"=>$actores]);
    }

    public function update(\Illuminate\Http\Request $request, $id)
    {
        $pelicula =  \App\Models\Pelicula::with('actores')->findOrFail($id);

        $pelicula->titulo = $request->input('titulo');
        $pelicula->pais = $request->input('pais');
        $pelicula->start_date = $request->input('start_date');
        $pelicula->nominaciones_oscar = $request->input('nominaciones_oscar');
        $pelicula->oscars_ganados = $request->input('oscars_ganados');
        if ($request->hasFile('imatge')) {
            $fitxer = $request->file('imatge');
            $nomImatge = time() . '_' . $fitxer->getClientOriginalName();
            $fitxer->move(public_path('portades'), $nomImatge);

            $pelicula->imatge = $nomImatge;
        }
        $pelicula->save();
        if($request->has('actores_ids')){
            $pelicula->actores()->sync($request->input('actores_ids',[]));
        }else{
            $pelicula->actores()->detach();
        }
        return redirect('/peliculas/index');
    }
    public function store(\Illuminate\Http\Request $request){
        $pelicula = new \App\Models\Pelicula();

        $pelicula->titulo = $request->input('titulo');
        $pelicula->pais = $request->input('pais');
        $pelicula->start_date = $request->input('start_date');
        $pelicula->nominaciones_oscar = $request->input('nominaciones_oscar');
        $pelicula->oscars_ganados = $request->input('oscars_ganados');
        if ($request->hasFile('imatge')) {
            $fitxer = $request->file('imatge');
            $nomImatge = time() . '_' . $fitxer->getClientOriginalName();
            $fitxer->move(public_path('portades'), $nomImatge);

            $pelicula->imatge = $nomImatge;
        }

        $pelicula->save();

        if($request->has('actores_ids')){
            $pelicula->actores()->attach($request->input('actores_ids'));
        }

        return redirect('/peliculas/index');
    }
    public function show($id)
    {
        // Busquem el llibre pel seu ID. Si no existeix, donarà un error 404.
        $pelicula = \App\Models\Pelicula::with('actores')->findOrFail($id);
        return view('peliculas.show', compact('pelicula'));
    }

    public function destroy($id)
    {
        $pelicula = \App\Models\Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect('/peliculas/index');
    }
}
