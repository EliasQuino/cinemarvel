<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la fachada DB
class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            [ 'nombre' => 'Bebidas'],       // Categoría para bebidas (ej. refrescos, agua)
            [ 'nombre' => 'Gaseosas'],      // Categoría para gaseosas (ej. coca cola, sprite, pepsi, fanta)
            ['nombre' => 'Confitería'],    // Categoría para productos de confitería (ej. caramelos, chocolates)
            [ 'nombre' => 'Snacks'],        // Categoría para snacks (ej. palomitas de maíz, nachos)
        ]);
     }
}
