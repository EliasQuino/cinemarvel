<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la fachada DB

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peliculas')->insert([
            ['Nombre' => 'Deadpool & Wolverine', 'Clasificacion' => 'R', 'Duracion' => '01:48:00', 'Idgenero' => 1],
            ['Nombre' => 'Coraline y la puerta secreta', 'Clasificacion' => 'PG', 'Duracion' => '01:40:00', 'Idgenero' => 6],
            ['Nombre' => 'Star Wars III - La venganza de los Sith', 'Clasificacion' => 'PG-13', 'Duracion' => '02:20:00', 'Idgenero' => 5],
            ['Nombre' => 'Solo Leveling - Arise from the Shadow', 'Clasificacion' => 'PG-13', 'Duracion' => '01:30:00', 'Idgenero' => 2],
            ['Nombre' => 'El Señor de los Anillos: el retorno del Rey', 'Clasificacion' => 'PG-13', 'Duracion' => '02:21:00', 'Idgenero' => 6],
            ['Nombre' => 'Spider-Man: A través del Spider-Verso', 'Clasificacion' => 'PG', 'Duracion' => '01:56:00', 'Idgenero' => 13],
            ['Nombre' => 'Son como niños 2', 'Clasificacion' => 'PG-13', 'Duracion' => '01:41:00', 'Idgenero' => 3],
            ['Nombre' => 'Interestelar', 'Clasificacion' => 'PG-13', 'Duracion' => '02:49:00', 'Idgenero' => 5],
            ['Nombre' => 'Un lugar en silencio', 'Clasificacion' => 'PG-13', 'Duracion' => '01:30:00', 'Idgenero' => 7],
            ['Nombre' => 'Hasta el último hombre', 'Clasificacion' => 'R', 'Duracion' => '02:19:00', 'Idgenero' => 4],
            ['Nombre' => 'Siempre a tu lado', 'Clasificacion' => 'PG', 'Duracion' => '01:37:00', 'Idgenero' => 4],
        ]);
    }
}
