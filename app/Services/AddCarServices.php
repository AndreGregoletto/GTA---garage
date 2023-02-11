<?php

namespace App\Services;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Category;

class AddCarServices
{
    public function index()
    {
        $cars    = Car::whereStatus(1)->skip($_POST['pag'])->take(10)->with('category', 'brand')->get();
        $paginas = count(Car::whereStatus(1)->with('category', 'brand')->get());
        $data = [
            'cars'   => $cars,
            'paginas' => $paginas
        ];

        return response()->json($data);
    }

    public function comboBrandCategor()
    {
        $data = [
            'brand_id'    => Brand::whereStatus(1)->get(),
            'category_id' => Category::whereStatus(1)->get()
        ];

        return response()->json($data);
    }
}