<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role1= Role::create(['name'=>'administrador']);
        $role2= Role::create(['name'=>'cajero']);

        Permission::create(['name' => 'PernisoAdmin']);
        Permission::create(['name' => 'PernisoCaj']);


    }
}
