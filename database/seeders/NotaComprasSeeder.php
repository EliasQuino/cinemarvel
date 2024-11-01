<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nota_compras')->insert([
            [
                'IdProveedor' => 1, // Asegúrate de que este ID de proveedor existe
                'IdCajero' => 3, // ID del cajero que registró la entrada
                'precio_total' => 1500.00, // precio_compra * cantidad
            ],
            // Agrega más productos si es necesario
            [
                'IdProveedor' => 1, // Proveedor
              'IdCajero' => 3, // Cajero
                'precio_total' => 600.00,
            ],

            ]);

                }
}
