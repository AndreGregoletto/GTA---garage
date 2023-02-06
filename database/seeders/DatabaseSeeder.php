<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            BrandSeeder::class,
            CategorySeeder::class,
            CarSeeder::class,
            UsersSeeder::class
        ]);
    }
}
