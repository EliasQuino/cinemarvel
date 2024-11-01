<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColumnasSeeder extends Seeder
{
    public function run()
    {
        $columnas = [];
        for ($i = 1; $i <= 6; $i++) {
            $columnas[] = [
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('columnas')->insert($columnas);
    }
}

