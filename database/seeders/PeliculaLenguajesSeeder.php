<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la fachada DB

class PeliculaLenguajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pelicula_lenguajes')->insert([
            ['IdPelicula' => 1, 'IdLenguaje' => 1], // Deadpool & Wolverine en Español
            ['IdPelicula' => 1, 'IdLenguaje' => 2], // Deadpool & Wolverine en Inglés
            ['IdPelicula' => 2, 'IdLenguaje' => 1], // Coraline y la puerta secreta en Español
            ['IdPelicula' => 3, 'IdLenguaje' => 1], // Star Wars: Episodio III - La venganza de los Sith en Español
            ['IdPelicula' => 3, 'IdLenguaje' => 2], // Star Wars: Episodio III - La venganza de los Sith en Inglés
            ['IdPelicula' => 4, 'IdLenguaje' => 1], // Solo Leveling - Arise from the Shadow en Español
            ['IdPelicula' => 5, 'IdLenguaje' => 1], // El Señor de los Anillos: el retorno del Rey en Español
            ['IdPelicula' => 5, 'IdLenguaje' => 2], // El Señor de los Anillos: el retorno del Rey en Inglés
            ['IdPelicula' => 6, 'IdLenguaje' => 1], // Spider-Man: A través del Spider-Verso en Español
            ['IdPelicula' => 6, 'IdLenguaje' => 2], // Spider-Man: A través del Spider-Verso en Inglés
            ['IdPelicula' => 6, 'IdLenguaje' => 3], // Spider-Man: A través del Spider-Verso en Portugués
            ['IdPelicula' => 7, 'IdLenguaje' => 1], // Son como niños 2 en Español
            ['IdPelicula' => 8, 'IdLenguaje' => 1], // Interestelar en Español
            ['IdPelicula' => 8, 'IdLenguaje' => 2], // Interestelar en Inglés
            ['IdPelicula' => 9, 'IdLenguaje' => 1], // Un lugar en silencio en Español
            ['IdPelicula' => 10, 'IdLenguaje' => 1], // Hasta el último hombre en Español
            ['IdPelicula' => 10, 'IdLenguaje' => 2], // Hasta el último hombre en Inglés
            ['IdPelicula' => 11, 'IdLenguaje' => 1], // Siempre a tu lado en Español
        ]);
    }
}
