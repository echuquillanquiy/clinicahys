<?php

namespace Database\Seeders;

use App\Models\Place;
use Illuminate\Database\Seeder;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Place::create([
            'name' => 'LIMA',
            'address' => 'AV. JAVIER PRADO ESTE N° 1750 URB. CORPAC - SAN ISIDRO - LIMA - LIMA',
            'email' => 'lima@hysoccupational.com',
            'phone' => '985691002',
            'url' => 'https://goo.gl/maps/bs5D6QEUxVskQZGS9',
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3901.337421219631!2d-77.0103457!3d-12.0890373!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c87dd9136bd9%3A0x1f197c96c4833e03!2sH%26S%20OCCUPATIONAL%20SAC%20-%20LIMA!5e0!3m2!1ses!2spe!4v1624469395808!5m2!1ses!2spe" class="h-full w-full object-center object-cover" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'image' => 'https://cdn.pixabay.com/photo/2017/01/31/13/18/house-2023960_960_720.png'
        ]);

        Place::create([
            'name' => 'HUANCAYO',
            'address' => 'JR. AREQUIPA N° 655 - EL TAMBO - HUANCAYO - JUNIN',
            'email' => 'huancayo@hysoccupational.com',
            'phone' => '985691000',
            'url' => 'https://goo.gl/maps/CZo2TWSDugHi7P369',
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.753930334299!2d-75.21875878518735!3d-12.060444391458148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e9638830a2879%3A0x1a0cafab5f4317dd!2sH%20%26%20S!5e0!3m2!1ses!2spe!4v1624469420029!5m2!1ses!2spe" class="h-full w-full object-center object-cover" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'image' => 'https://cdn.pixabay.com/photo/2021/01/28/18/21/beach-5958718_960_720.jpg'
        ]);

        Place::create([
            'name' => 'HUANCAVELICA',
            'address' => 'AV. ASCENCIÓN N° 208 - ASCENCIÓN - HUANCAVELICA - HUANCAVELICA',
            'email' => 'huancavelica@hysoccupational.com',
            'phone' => '945512522',
            'url' => 'https://goo.gl/maps/xff64vmLF36S9ULx5',
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3890.932113223667!2d-74.99028818517999!3d-12.782918490979856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910e0b51c8065bf5%3A0x7fef0891f52244ff!2sH%26S%20OCCUPATIONAL%20-%20HUANCAVELICA!5e0!3m2!1ses!2spe!4v1624555067794!5m2!1ses!2spe" class="h-full w-full object-center object-cover" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'image' => 'https://cdn.pixabay.com/photo/2021/01/27/15/54/wedding-5955351_960_720.jpg'
        ]);

        Place::create([
            'name' => 'SAN RAMÓN',
            'address' => 'AV. PERÚ N° 189 - URB. EL MILAGRO - SAN RAMÓN - CHANCHAMAYO - JUNIN',
            'email' => 'sanramon@hysoccupational.com',
            'phone' => '995055588',
            'url' => 'https://goo.gl/maps/pNRjWqyXLyxf6vGQ8',
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3914.850641565997!2d-75.36166628519614!3d-11.124499492085919!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91090d2377783c23%3A0x431e0f68e786d806!2sH%26S%20OCCUPATIONAL%20-%20SAN%20RAM%C3%93N!5e0!3m2!1ses!2spe!4v1624469425107!5m2!1ses!2spe" class="h-full w-full object-center object-cover" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'image' => 'https://cdn.pixabay.com/photo/2021/04/22/15/46/landscape-6199355_960_720.jpg'
        ]);

        Place::create([
            'name' => 'PASCO',
            'address' => 'JR. JOSE CARLOS MARIÁTEGUI N° 105 - YANACANCHA - PASCO - PASCO',
            'email' => 'pasco@hysoccupational.com',
            'phone' => '946241510',
            'url' => 'https://goo.gl/maps/MPAA5VQaoexJqPyi6',
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d490.11534640274135!2d-76.25319297180098!3d-10.66310252756309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910813065449478d%3A0xa9661b3d3c4387c8!2sH%26S%20OCCUPATIONAL%20-%20PASCO!5e0!3m2!1ses!2spe!4v1626378653146!5m2!1ses!2spe" class="h-full w-full object-center object-cover" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'image' => 'https://cdn.pixabay.com/photo/2021/04/24/19/14/lotus-6204849_960_720.jpg'
        ]);

        /*Place::create([
            'name' => 'AYACUCHO',
            'address' => 'AV. SIMON BOLIVAR MZ.A LT.10A - URB. LOS LICENCIADOS - HUAMANGA - AYACUCHO',
            'email' => 'ayacucho@hysoccupational.com',
            'phone' => '994846557',
            'url' => 'https://goo.gl/maps/iwy1QnCLG2rzRYrk9',
            'iframe' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d490.11534640274135!2d-76.25319297180098!3d-10.66310252756309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x910812b751a839f9%3A0x8f755a84ca13e807!2zMTDCsDM5JzQ2LjgiUyA3NsKwMTUnMTEuNSJX!5e0!3m2!1ses!2spe!4v1626377756868!5m2!1ses!2spe" class="h-full w-full object-center object-cover" style="border:0;" allowfullscreen="" loading="lazy"></iframe>',
            'image' => 'https://cdn.pixabay.com/photo/2021/04/25/23/17/rome-6207755_960_720.jpg'
        ]);*/

    }
}
