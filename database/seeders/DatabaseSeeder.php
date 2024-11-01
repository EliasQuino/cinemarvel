<?php

namespace Database\Seeders;

use App\Models\DetalleCompra;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([

            UsersSeeder::class,
            PuestosSeeder::class,
            ClienteVirtualsSeeder::class,
            ClientePresencialsSeeder::class,
            CajerosSeeder::class,

            SalasSeeder::class,
            FormatosSeeder::class,
            GenerosSeeder::class,
            LenguajesSeeder::class,
            PeliculasSeeder::class,
            PeliculaLenguajesSeeder::class,
            ProyeccionsSeeder::class,
            FilasSeeder::class,
            ColumnasSeeder::class,
            ButacasSeeder::class,
            ProveedorsSeeder::class,
            CategoriasSeeder::class,
            ProductosSeeder::class,

            // Otros seeders que necesites
        ]);
    }
}
