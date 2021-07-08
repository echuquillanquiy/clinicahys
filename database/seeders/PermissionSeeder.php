<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
            'name' => 'Crear trabajos'
        ]);

        Permission::create([
            'name' => 'Ver trabajos'
        ]);

        Permission::create([
            'name' => 'Actualizar trabajos'
        ]);

        Permission::create([
            'name' => 'Eliminar trabajos'
        ]);

        Permission::create([
            'name' => 'Ver dashboard'
        ]);

        Permission::create([
            'name' => 'Crear role'
        ]);

        Permission::create([
            'name' => 'Listar role'
        ]);

        Permission::create([
            'name' => 'Editar role'
        ]);

        Permission::create([
            'name' => 'Eliminar role'
        ]);

        Permission::create([
            'name' => 'Ver usuarios'
        ]);

        Permission::create([
            'name' => 'Crear usuarios'
        ]);

        Permission::create([
            'name' => 'Editar usuarios'
        ]);
    }
}
