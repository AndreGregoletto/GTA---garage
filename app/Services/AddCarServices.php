<?php

namespace App\Services;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Category;
use App\Models\UserCars;

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

    function filter($cars, $pags, $param)
    {
        if(!empty($param['name'])){
            $cars = $cars->where('name', 'LIKE', '%'.$param['name'].'%');
            $pags = $pags->where('name', 'LIKE', '%'.$param['name'].'%');
        }

        if(!empty($param['category'])){
            $cars = $cars->where('category_id', $param['category']);
            $pags = $pags->where('category_id', $param['category']);
        }

        if(!empty($param['brand'])){
            $cars = $cars->where('brand_id', $param['brand']);
            $pags = $pags->where('brand_id', $param['brand']);
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

    public function addCar($id)
    {
        $data = [
            'user_id' => auth()->user()->id,
            'car_id'  => $id
        ];

        UserCars::create($data);

        $car = Car::whereId($id)->first();
        // toastr()->success($car['name']." Adicionado com sucesso");
        return response()->json(utf8_decode($car['name']." Adicionado com sucesso"), 200);
    }
}