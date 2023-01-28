<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name'  => 'Super',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Esportivo',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Potentes',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Clássicos',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Duas Portas',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Quatro Portas',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Carros de Luxo',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'SUVs',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Bennys',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'OFF-ROAD',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Caminhonetes',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Comuns',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Emergência',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Serviço Público',
            'status' => 1
        ]);
        Category::create([
            'name'  => 'Motos',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Barcos',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Aeronaves',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Militar',
            'status' => 1
        ]);
        
        Category::create([
            'name'  => 'Corrida',
            'status' => 1
        ]);

        Category::create([
            'name'  => 'Especialm',
            'status' => 1
        ]);
    }
}
