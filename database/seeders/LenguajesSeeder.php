<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la fachada DB

class LenguajesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('lenguajes')->insert([
            ['Idioma' => 'Español', 'Subtitulo' => 'Ninguno'],
            [ 'Idioma' => 'Inglés', 'Subtitulo' => 'Español'],
            [ 'Idioma' => 'Portugués', 'Subtitulo' => 'Español'],
            [ 'Idioma' => 'Francés', 'Subtitulo' => 'Español'],
            ['Idioma' => 'Alemán', 'Subtitulo' => 'Español'],
            ['Idioma' => 'Italiano', 'Subtitulo' => 'Español'],
            ['Idioma' => 'Chino', 'Subtitulo' => 'Español'],
            [ 'Idioma' => 'Japonés', 'Subtitulo' => 'Español'],
        ]);
    }
}
