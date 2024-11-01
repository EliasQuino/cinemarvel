<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recuperar todos las categorias
        $usuarios = Categoria::all();

        // Pasar los datos a la vista
        return view('categoria.index', compact('usuarios'));
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios=new Categoria();
        $usuarios->nombre= $request->get('nombre');
        $usuarios->save();
        return redirect('/categoria');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = Categoria::find($id); // Encuentra el usuario por ID
        return view('categoria.edit')->with('usuario', $usuario);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuarios=Categoria::find($id);
        $usuarios->nombre= $request->get('nombre');
        $usuarios->save();
        return redirect('/categoria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
     // Busca el usuario por ID
     $usuario = Categoria::find($id);

     // Verifica si el usuario existe
     if ($usuario)
     {
        $usuario->delete();
        return redirect('/categoria')->with('success', 'Categoria eliminado exitosamente');
     } else
     {
        return redirect('/categoria')->with('error', 'Categoria no encontrado');
     }
    }

 }
