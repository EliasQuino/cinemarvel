<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProveedorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedors')->insert([
            [
                'nombre' => 'Proveedor A',
                'telefono' => '123456789',
                'email' => 'proveedorA@example.com',
            ],
            [
                'nombre' => 'Proveedor B',
                'telefono' => '987654321',
                'email' => 'proveedorB@example.com',
            ],
            [
                'nombre' => 'Proveedor C',
                'telefono' => '456123789',
                'email' => 'proveedorC@example.com',
            ],
            [
                'nombre' => 'Proveedor D',
                'telefono' => '321654987',
                'email' => 'proveedorD@example.com',
            ],
            [
                'nombre' => 'Proveedor E',
                'telefono' => '654789123',
                'email' => 'proveedorE@example.com',
            ],
            // Agrega más proveedores según sea necesario
        ]);
    }
}
