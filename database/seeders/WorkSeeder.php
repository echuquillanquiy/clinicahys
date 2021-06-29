<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Requirement;
use App\Models\Work;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Work::factory(100)->create()->each(function (Work $work){
            Image::factory(1)->create([
                'imageable_id' => $work->id,
                'imageable_type' => Work::class
            ]);

            Requirement::factory(10)->create([
               'work_id' => $work->id
            ]);
        });


    }
}
