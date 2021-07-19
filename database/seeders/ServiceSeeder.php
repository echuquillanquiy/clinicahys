<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                'name' => 'AUDIOMETRIA'
            ],
            [
                'name' => 'RADIOLOGIA DIGITAL'
            ],
            [
                'name' => 'LABORATORIO CLINICO'
            ],
            [
                'name' => 'EXAMEN FISICO'
            ],
            [
                'name' => 'ERGONOMIA - MUSCULOESQUELETICO'
            ],
            [
                'name' => 'OFTALMOLOGIA'
            ],
            [
                'name' => 'ODONTOLOGIA'
            ],
            [
                'name' => 'ELECTROCARDIOGRAMA'
            ],
            [
                'name' => 'PSICOLOGIA'
            ],
            [
                'name' => 'ESPIROMETRIA'
            ],


        ];

        foreach ($services as $service){
            Service::factory(1)->create($service);
        }
    }
}
