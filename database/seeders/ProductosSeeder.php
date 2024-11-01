<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la fachada DB

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [ 'Nombre' => 'Coca-Cola pequeño', 'Fecha_Vencimiento' => '2024-12-31', 'Precio' => 15,  'IdCategoria' => 2, 'Cantidad' => 0],  // Gaseosa
            [ 'Nombre' => 'Coca-Cola mediano', 'Fecha_Vencimiento' => '2024-12-31', 'Precio' => 20,  'IdCategoria' => 2, 'Cantidad' => 0],  // Gaseosa
            ['Nombre' => 'Coca-Cola grande', 'Fecha_Vencimiento' => '2024-12-31', 'Precio' => 25, 'IdCategoria' => 2, 'Cantidad' => 0],  // Gaseosa
            ['Nombre' => 'Pepsi pequeño', 'Fecha_Vencimiento' => '2024-12-31', 'Precio' => 15,  'IdCategoria' => 2, 'Cantidad' => 0],      // Gaseosa
            [ 'Nombre' => 'Pepsi mediano', 'Fecha_Vencimiento' => '2024-12-31', 'Precio' => 20, 'IdCategoria' => 2, 'Cantidad' => 0],      // Gaseosa
            [ 'Nombre' => 'Pepsi grande', 'Fecha_Vencimiento' => '2024-12-31', 'Precio' => 25, 'IdCategoria' => 2, 'Cantidad' => 0],      // Gaseosa
            [ 'Nombre' => 'Pipoca pequeña', 'Fecha_Vencimiento' => '2024-10-31', 'Precio' => 30,  'IdCategoria' => 4, 'Cantidad' => 0],  // Snack
            [ 'Nombre' => 'Pipoca mediana', 'Fecha_Vencimiento' => '2024-10-31', 'Precio' => 35,  'IdCategoria' => 4, 'Cantidad' => 0],  // Snack
            [ 'Nombre' => 'Pipoca grande', 'Fecha_Vencimiento' => '2024-10-31', 'Precio' => 40, 'IdCategoria' => 4, 'Cantidad' => 0],  // Snack
            [ 'Nombre' => 'Nachos con Queso', 'Fecha_Vencimiento' => '2024-10-31', 'Precio' => 10,  'IdCategoria' => 4, 'Cantidad' => 0],  // Snack
            [ 'Nombre' => 'Chocolate Crunch', 'Fecha_Vencimiento' => '2024-11-15', 'Precio' => 10,  'IdCategoria' => 3, 'Cantidad' => 0], // Confitería
            [ 'Nombre' => 'Gominolas', 'Fecha_Vencimiento' => '2024-11-30', 'Precio' => 10, 'IdCategoria' => 3, 'Cantidad' => 0],       // Confitería
            [ 'Nombre' => 'Agua Mineral', 'Fecha_Vencimiento' => '2024-12-31', 'Precio' => 10,  'IdCategoria' => 1, 'Cantidad' => 0],    // Bebida
            [ 'Nombre' => 'Jugo de Naranja', 'Fecha_Vencimiento' => '2024-11-30', 'Precio' => 20,  'IdCategoria' => 1, 'Cantidad' => 0],  // Bebida
        ]);    }
}
