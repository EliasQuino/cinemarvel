<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $filas = [
            ['letra' => 'A'],
            ['letra' => 'B'],
            ['letra' => 'C'],
            ['letra' => 'D'],
            ['letra' => 'E'],
            ['letra' => 'F'],
            ['letra' => 'G'],
            ['letra' => 'H'],
            ['letra' => 'I'],
            ['letra' => 'J'],
            // Puedes agregar más letras según sea necesario
        ];

        DB::table('filas')->insert($filas);
    }
}
