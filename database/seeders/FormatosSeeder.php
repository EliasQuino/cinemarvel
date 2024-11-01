<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la fachada DB

class FormatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('formatos')->insert([
            ['Descripcion' => '2D', 'Precio' => 30.00],
            ['Descripcion' => '4D E-Motion 2D', 'Precio' => 70.00],
            ['Descripcion' => '2D Atmos', 'Precio' => 40.00],
            ['Descripcion' => '2D CXC Atmos', 'Precio' => 50.00],
            ['Descripcion' => '3D', 'Precio' => 60.00],
            ['Descripcion' => '4D E-Motion 3D', 'Precio' => 80.00],
        ]);
    }
}
