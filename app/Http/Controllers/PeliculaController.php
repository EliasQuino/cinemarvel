<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;
use App\Models\Genero;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Trae todas las películas junto con su género asociado
        $peliculas = Pelicula::with('genero')->get();



        // Retorna una vista con las películas (o se devuelve JSON para una API)
        return view('pelicula.index', compact('peliculas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $generos = Genero::all();
        return view('pelicula.create', compact('generos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pelicula=new Pelicula();
        $pelicula->Nombre= $request->get('Nombre');
        $pelicula->Clasificacion= $request->get('Clasificacion');
        $pelicula->Duracion = $request->get('Duracion');
        $pelicula->Idgenero= $request->get('Idgenero');
       // $pelicula->DireccionPelicula = $request->get('DireccionPelicula');
        $pelicula->save();
        return redirect('/proveedor');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pelicula $pelicula)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pelicula=Pelicula::find($id);
        $pelicula->Nombre= $request->get('Nombre');
        $pelicula->Clasificacion= $request->get('Clasificacion');
        $pelicula->Duracion = $request->get('Duracion');
        $pelicula->Idgenero= $request->get('Idgenero');
        //$pelicula->DireccionPelicula = $request->get('DireccionPelicula');
        $pelicula->save();
        return redirect('pelicula')->with('success', 'Película actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelicula $pelicula)
    {
        //
    }
}
