<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetalleComprasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('detalle_compras')->insert([
            [
                'Idnota' => 1, // Asegúrate de que este ID de nota existe
                'Idproducto' => 1, // Asegúrate de que este ID de producto existe
                'cantidad' => 100,
                'precio_compra' => 10.00, // Precio de compra
            ],
            [
                'Idnota' => 1, // Asegúrate de que este ID de nota existe
                'Idproducto' => 4, // Asegúrate de que este ID de producto existe
                'cantidad' => 100,
                'precio_compra' => 5.00, // Precio de compra
            ],
            [
                'Idnota' => 2, // Asegúrate de que este ID de nota existe
                'Idproducto' => 2, // Asegúrate de que este ID de producto existe
                'cantidad' => 50,
                'precio_compra' => 12.00, // Precio de compra
            ],
        ]);
    }
}
