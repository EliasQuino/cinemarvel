<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{

    public function index()
    {
    // Recuperar todos los clientes presenciales
    $usuarios = Proveedor::all();

    // Pasar los datos a la vista
    return view('proveedor.index', compact('usuarios'));
    }







    public function create()
    {
        return view('proveedor.create');
    }

    public function store(Request $request)
    {
        $usuarios=new Proveedor();
        $usuarios->nombre= $request->get('nombre');
        $usuarios->telefono= $request->get('telefono');

        $usuarios->email= $request->get('email');
        $usuarios->save();
        return redirect('/proveedor');
    }






    public function show(Proveedor $proveedor)
    {
        //
    }
    public function edit(string $id)
    {
        $usuario = Proveedor::find($id); // Encuentra el proveedor por ID
        return view('proveedor.edit')->with('usuario', $usuario);
    }




    public function update(Request $request, string $id)
    {
        $usuarios=Proveedor::find($id);
        $usuarios->nombre= $request->get('nombre');
        $usuarios->telefono= $request->get('telefono');
        $usuarios->email= $request->get('email');
        $usuarios->save();
        return redirect('/proveedor');
    }


    public function destroy($id)
    {
     // Busca el proveedor por ID
     $usuario = Proveedor::find($id);

     // Verifica si el proveedor existe
     if ($usuario)
     {
        $usuario->delete();
        return redirect('/proveedor')->with('success', 'Proveedor eliminado exitosamente');
     } else
     {
        return redirect('/proveedor')->with('error', 'Proveedor no encontrado');
     }
    }

 }
