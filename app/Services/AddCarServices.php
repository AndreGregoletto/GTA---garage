<?php

namespace App\Services;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Category;

class AddCarServices
{
    public function index()
    {
        $param = [
            'pag'      => $_POST['pag'],
            'name'     => isset($_POST['name'])     ? $_POST['name']     : '',
            'category' => isset($_POST['category']) ? $_POST['category'] : '',
            'brand'    => isset($_POST['brand'])    ? $_POST['brand']    : ''
        ];

        $cars     = Car::whereStatus(1)->skip($param['pag'])->take(10)->with('category', 'brand');
        $pags     = Car::whereStatus(1);
        $response = $this->filter($cars, $pags ,$param);

        return response()->json($response);
    }

    function filter($cars, $pags, $response)
    {
        if(!empty($response['name'])){
            $cars = $cars->where('name', 'LIKE', '%'.$response['name'].'%');
            $pags = $pags->where('name', 'LIKE', '%'.$response['name'].'%');
        }

        if(!empty($response['category'])){
            $cars = $cars->where('category_id', $response['category']);
            $pags = $pags->where('category_id', $response['category']);
        }

        if(!empty($response['brand'])){
            $cars = $cars->where('brand_id', $response['brand']);
            $pags = $pags->where('brand_id', $response['brand']);
        }

        return $response = [
            'paginas' => count($pags->get()),
            'cars'    => $cars->get()
        ];
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