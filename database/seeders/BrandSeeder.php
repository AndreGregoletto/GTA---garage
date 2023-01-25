<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
            'name'   => 'Ferrari',
            'status' => 1
        ]);

        Brand::create([
            'name'   => 'Bugati',
            'status' => 1
        ]);

        Brand::create([
            'name'   => 'Mercedes',
            'status' => 0
        ]);

        Brand::create([
            'name'   => 'Fiat',
            'status' => 1
        ]);
    }
}
