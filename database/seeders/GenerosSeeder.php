<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la fachada DB

class GenerosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('generos')->insert([
            ['Nombre' => 'Acción'],
            ['Nombre' => 'Aventura'],
            ['Nombre' => 'Comedia'],
            ['Nombre' => 'Drama'],
            ['Nombre' => 'Ciencia Ficción'],
            ['Nombre' => 'Fantasía'],
            ['Nombre' => 'Terror'],
            ['Nombre' => 'Romance'],
            ['Nombre' => 'Misterio'],
            ['Nombre' => 'Thriller'],
            ['Nombre' => 'Musical'],
            ['Nombre' => 'Documental'],
            ['Nombre' => 'Animación'],
            ['Nombre' => 'Biografía'],
        ]);
    }
}
