<?php

namespace App\Services;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Category;

class CarServices
{
    public function ajaxPost()
    {
        $response = [
            'name'        => $_POST['name'],
            'category_id' => $_POST['category_id'],
            'brand_id'    => $_POST['brand_id'],
            'convertible' => $_POST['convertible'],
            'status'      => $_POST['status']
        ];

        return $response;
    }

    public function index()
    {
        $response = [
            'brand'    => Brand::whereStatus(1)->get(),
            'category' => Category::whereStatus(1)->get(),
            'car'      => Car::with(['category', 'brand', 'brand'])->get(),
        ];

        return $response;
    }

    public function store()
    {
        Car::create($this->ajaxPost());
    }

    public function updated()
    {
        Car::whereId($_POST['id'])->update($this->ajaxPost());
    }

    public function destroy($id)
    {
        Car::whereId($id)->delete();
    }
}