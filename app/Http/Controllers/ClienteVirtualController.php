<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ClienteVirtual;


class ClienteVirtualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Recuperar solo los usuarios que tienen un cliente virtual asociado
        $usuarios = User::whereHas('clienteVirtual')->get();

        return view('clienteVirtual.index', compact('usuarios'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clienteVirtual.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuarios=new User();
        $usuarios->name= $request->get('name');
        $usuarios->email= $request->get('email');
        $usuarios->password= $request->get('password');
        $usuarios->save();
        return redirect('/clienteVirtual');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   ///$generos = Genero::all();
        $usuario = User::find($id); // Encuentra el usuario por ID
        return view('clienteVirtual.show')->with('usuario', $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuario = User::find($id); // Encuentra el usuario por ID
        return view('clienteVirtual.edit')->with('usuario', $usuario);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $usuarios=User::find($id);
        $usuarios->name= $request->get('name');
        $usuarios->email= $request->get('email');
        $usuarios->password= $request->get('password');
        $usuarios->save();
        return redirect('/clienteVirtual');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
     // Busca el usuario por ID
     $usuario = User::find($id);

     // Verifica si el usuario existe
     if ($usuario)
     {
        $usuario->delete();
        return redirect('/clienteVirtual')->with('success', 'Usuario eliminado exitosamente');
     } else
     {
        return redirect('/clienteVirtual')->with('error', 'Usuario no encontrado');
     }
    }

 }
