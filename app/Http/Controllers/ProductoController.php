<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    // Método para mostrar todos los productos
    public function index()
    {
        $productos = Producto::with('categoria')->get();
        return view('producto.index', compact('productos'));
    }

    // Mostrar formulario de creación de un nuevo producto
    public function create()
    {
        $categorias = Categoria::all();
        return view('producto.create', compact('categorias'));
    }

    // Guardar un nuevo producto en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Fecha_Vencimiento' => 'required|date',
            'Precio' => 'required|numeric|min:0',
            'IdCategoria' => 'required|exists:categorias,id',
            'cantidad' => 'required|integer|min:0'
        ]);

        DB::transaction(function () use ($request) {
            Producto::create([
                'Nombre' => $request->input('Nombre'),
                'Fecha_Vencimiento' => $request->input('fecha'),
                'Precio' => $request->input('Precio'),
                'IdCategoria' => $request->input('IdCategoria'),
                'cantidad' => $request->input('cantidad'),
            ]);
        });

        return redirect()->route('producto.index')->with('success', 'Producto creado correctamente');
    }

    // Mostrar formulario para editar un producto
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        $categorias = Categoria::all();

        return view('producto.edit', compact('producto', 'categorias'));
    }

    // Actualizar el producto en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nombre' => 'required|string|max:255',
            'Fecha_Vencimiento' => 'required|date',
            'Precio' => 'required|numeric|min:0',
            'IdCategoria' => 'required|exists:categorias,id',
           'cantidad' => 'required|integer|min:0'
        ]);

        DB::transaction(function () use ($request, $id) {
            $producto = Producto::findOrFail($id);
            $producto->update([
                'Nombre' => $request->input('Nombre'),
                'Fecha_Vencimiento' => $request->input('Fecha_Vencimiento'),
                'Precio' => $request->input('Precio'),
                'IdCategoria' => $request->input('IdCategoria'),
                'cantidad' => $request->input('cantidad'),
            ]);
        });

        return redirect()->route('producto.index')->with('success', 'Producto actualizado correctamente');
    }

    // Eliminar un producto de la base de datos
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('producto.index')->with('success', 'Producto eliminado correctamente');
    }
}
