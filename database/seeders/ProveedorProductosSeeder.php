<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProveedorProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedor_productos')->insert([
            [
                'IdProveedor' => 1, // Asegúrate de que este ID de proveedor existe
                'IdProducto' => 1, // ID del producto 'Coca-Cola pequeño'
       ////      'IdCajero' => 3, // ID del cajero que registró la entrada
                'cantidad' => 100,
                'precio_compra' => 10.00, // Precio de compra
                'precio_total' => 1000.00, // precio_compra * cantidad
            ],
            // Agrega más productos si es necesario
            [
                'IdProveedor' => 1, // Proveedor
                'IdProducto' => 2, // ID del producto, por ejemplo, 'Coca-Cola mediano'
           ///    'IdCajero' => 3, // Cajero
                'cantidad' => 50,
                'precio_compra' => 12.00,
                'precio_total' => 600.00,
            ],
            [
                'IdProveedor' => 2, // Otro proveedor
                'IdProducto' => 4, // ID de otro producto
     ////  'IdCajero' => 3, // Otro cajero
                'cantidad' => 75,
                'precio_compra' => 11.00,
                'precio_total' => 825.00,
            ],
            ]);

                }
}
