<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Raúl Eduardo Chuquillanqui Yupanqui',
            'email' => 'echuquillanquiy@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        User::factory(100)->create();
    }
}
