<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Profile::create([
            'address' => 'JR. JUNIN 1435',
            'birthday' => '1990-09-20',
            'phone' => '944944199',
            'name_contact' => 'NANCY YUPANQUI',
            'phone_contact' => '972929239',
            'user_id' => 1,
            'cv' => 'hola'
        ]);
    }
}
