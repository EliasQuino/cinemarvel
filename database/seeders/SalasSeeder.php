<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de importar la fachada DB

class SalasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('salas')->insert([
            ['Capacidad' => 20, 'NroSala' => 1],
            ['Capacidad' => 30, 'NroSala' => 2],
            ['Capacidad' => 20, 'NroSala' => 3],
            ['Capacidad' => 30, 'NroSala' => 4],
            ['Capacidad' => 20, 'NroSala' => 5],
            ['Capacidad' => 30, 'NroSala' => 6],
            ['Capacidad' => 20, 'NroSala' => 7],
            ['Capacidad' => 30, 'NroSala' => 8],
            ['Capacidad' => 20, 'NroSala' => 9],
            ['Capacidad' => 30, 'NroSala' => 10],
            ['Capacidad' => 20, 'NroSala' => 11],
            ['Capacidad' => 30, 'NroSala' => 12],
            ['Capacidad' => 20, 'NroSala' => 13],
            ['Capacidad' => 30, 'NroSala' => 14],
            ['Capacidad' => 20, 'NroSala' => 15],
        ]);
    }
}
