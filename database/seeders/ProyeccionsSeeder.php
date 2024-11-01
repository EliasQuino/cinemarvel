<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyeccionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('proyeccions')->insert([
 // Sala id1: Formato 2D
 ['Dia' => 'Lunes', 'HoraIni' => '10:00:00', 'HoraFin' => '11:30:00', 'IdSala' => 1, 'IdFormato' => 1, 'IdPeli' => 4, 'IdLeng' => 1],
 ['Dia' => 'Lunes', 'HoraIni' => '12:00:00', 'HoraFin' => '13:30:00', 'IdSala' => 1, 'IdFormato' => 1, 'IdPeli' => 4, 'IdLeng' => 1],
 ['Dia' => 'Lunes', 'HoraIni' => '14:00:00', 'HoraFin' => '15:30:00', 'IdSala' => 1, 'IdFormato' => 1, 'IdPeli' => 4, 'IdLeng' => 1],
 ['Dia' => 'Lunes', 'HoraIni' => '16:00:00', 'HoraFin' => '17:30:00', 'IdSala' => 1, 'IdFormato' => 1, 'IdPeli' => 4, 'IdLeng' => 1],

 // Sala id1: Formato 2D
 ['Dia' => 'Lunes', 'HoraIni' => '10:00:00', 'HoraFin' => '11:30:00', 'IdSala' => 13, 'IdFormato' => 5, 'IdPeli' => 4, 'IdLeng' => 1],
 ['Dia' => 'Lunes', 'HoraIni' => '12:00:00', 'HoraFin' => '13:30:00', 'IdSala' => 13, 'IdFormato' => 5, 'IdPeli' => 4, 'IdLeng' => 1],
 ['Dia' => 'Lunes', 'HoraIni' => '14:00:00', 'HoraFin' => '15:30:00', 'IdSala' => 13, 'IdFormato' => 5, 'IdPeli' => 4, 'IdLeng' => 1],
 ['Dia' => 'Lunes', 'HoraIni' => '16:00:00', 'HoraFin' => '17:30:00', 'IdSala' => 13, 'IdFormato' => 5, 'IdPeli' => 4, 'IdLeng' => 1],

     // Sala id2: Formato 2D
     ['Dia' => 'Lunes', 'HoraIni' => '10:00:00', 'HoraFin' => '11:56:00', 'IdSala' => 15, 'IdFormato' => 2, 'IdPeli' => 5, 'IdLeng' => 1],
     ['Dia' => 'Lunes', 'HoraIni' => '12:00:00', 'HoraFin' => '13:56:00', 'IdSala' => 15, 'IdFormato' => 2, 'IdPeli' => 5, 'IdLeng' => 1],
     ['Dia' => 'Lunes', 'HoraIni' => '14:00:00', 'HoraFin' => '15:56:00', 'IdSala' => 15, 'IdFormato' => 2, 'IdPeli' => 5, 'IdLeng' => 1],
     ['Dia' => 'Lunes', 'HoraIni' => '16:00:00', 'HoraFin' => '17:56:00', 'IdSala' => 15, 'IdFormato' => 2, 'IdPeli' => 5, 'IdLeng' => 1],



    ]);
   }
}
