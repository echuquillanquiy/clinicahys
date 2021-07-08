<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Storage::deleteDirectory('public/services');
        Storage::deleteDirectory('public/clients');
        Storage::deleteDirectory('public/works');
        Storage::makeDirectory('public/services');
        Storage::makeDirectory('public/clients');
        Storage::makeDirectory('public/works');

        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(QuotationSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ClientSeeder::class);
        $this->call(TypeSeeder::class);
        $this->call(PlaceSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(WorkSeeder::class);
    }
}
