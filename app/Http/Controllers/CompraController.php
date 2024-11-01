<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use App\Models\Producto;
use App\Models\Proveedor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth; // Opcional, si necesitas funciones de autenticación adicionales
use Carbon\Carbon; // Asegúrate de importar Carbon

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $compras = Compra::with('proveedor')->get(); // Obtiene todas las compras con sus proveedores
        return view('compra.index', compact('compras'));
    }



    /**
     * Mostrar el formulario para crear una nueva compra.
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        return view('compra.create', compact('proveedores', 'productos'));
    }

    /**
     * Almacenar una nueva compra en la base de datos.
     */

public function store(Request $request)
{
    // Comprobar si el usuario está autenticado
    if (!Auth::check()) {
        return redirect()->route('login')->with('error', 'Necesitas iniciar sesión para realizar esta acción.');
    }

    // Validar la solicitud
    $request->validate([
        'proveedor_id' => 'required|exists:proveedors,id',
        'fecha' => 'required|date',
        'productos' => 'required|array', // Asegúrate de que los productos son un array
        'productos.*.cantidad' => 'required|integer|min:1', // Validación para la cantidad
        'productos.*.precio' => 'required|numeric|min:0', // Validación para el precio
        'productos.*.producto_id' => 'required|exists:productos,id' // Asegúrate que el producto existe
    ]);

    // Iniciar la transacción
    DB::transaction(function () use ($request) {
        // Calcular el precio total
        $precio_total = 0;
        $productos = $request->input('productos');

        foreach ($productos as $producto) {
            $precio_total += $producto['cantidad'] * $producto['precio']; // Sumar el total de cada producto
        }
 // Obtener el cajero asociado al usuario autenticado
 $cajero = Auth::user()->cajero; // Asegúrate de que esto devuelve el cajero

 if (!$cajero) {
     throw new \Exception('El usuario no está asociado a un cajero.'); // Manejo de errores si no hay cajero
 }
        // Crear la compra
        $compra = Compra::create([
            'proveedor_id' => $request->input('proveedor_id'),
            'fecha' => Carbon::parse($request->input('fecha')), // Asegúrate de que esto sea un objeto Carbon
            'IdCajero' => $cajero->id,
            'precio_total' => $precio_total,
        ]);

        // Agregar productos a la compra usando la tabla pivote
        foreach ($productos as $producto) {
            $compra->productos()->attach($producto['producto_id'], [
                'cantidad' => $producto['cantidad'],
                'precio' => $producto['precio'],
            ]);
        }
    });

    return redirect()->route('compra.index')->with('success', 'Compra creada exitosamente.');
}



    /**
     * Mostrar una compra específica.
     */
    public function show($id)
    {
        $compra = Compra::with('proveedor', 'productos')->findOrFail($id);
        return view('compra.show', compact('compra'));
    }

    /**
     * Mostrar el formulario para editar una compra existente.
     */
    public function edit($id)
    {
        $compra = Compra::findOrFail($id);
        $proveedores = Proveedor::all();
        $productos = Producto::all();
        return view('compra.edit', compact('compra', 'proveedores', 'productos'));
    }

    /**
     * Actualizar una compra existente en la base de datos.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'proveedor_id' => 'required|exists:proveedores,id',
            'fecha' => 'required|date',
            'productos' => 'required|array',
            'productos.*.id' => 'required|exists:productos,id',
            'productos.*.cantidad' => 'required|integer|min:1',
            'productos.*.precio' => 'required|numeric|min:0',
        ]);

        DB::transaction(function () use ($request, $id) {
            $compra = Compra::findOrFail($id);
            $compra->update([
                'proveedor_id' => $request->proveedor_id,
                'fecha' => $request->fecha,
            ]);

            // Eliminar productos previos y agregar los nuevos
            $compra->productos()->detach();
            foreach ($request->productos as $producto) {
                $compra->productos()->attach($producto['id'], [
                    'cantidad' => $producto['cantidad'],
                    'precio' => $producto['precio'],
                ]);
            }
        });

        return redirect()->route('compra.index')->with('success', 'Compra actualizada exitosamente');
    }

    /**
     * Eliminar una compra existente de la base de datos.
     */
    public function destroy($id)
    {
        $compra = Compra::findOrFail($id);
        $compra->productos()->detach();
        $compra->delete();

        return redirect()->route('compra.index')->with('success', 'Compra eliminada exitosamente');
    }
}
