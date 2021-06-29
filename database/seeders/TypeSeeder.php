<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'TIEMPO COMPLETO'
        ]);

        Type::create([
            'name' => 'TIEMPO PARCIAL'
        ]);

        Type::create([
            'name' => 'REMOTO'
        ]);
    }
}
