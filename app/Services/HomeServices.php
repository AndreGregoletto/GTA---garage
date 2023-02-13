<?php

namespace App\Services;

use App\Models\Car;
use App\Models\Brand;
use App\Models\Garage;
use App\Models\Category;
use App\Models\UserCars;
use App\Models\UserGarage;

class HomeServices
{
    public function countAllCar()
    {
        return count(Car::get());
    }

    public function countCar()
    {
        return count(UserCars::where('user_id', auth()->user()->id)->get());
    }

    public function allBrand()
    {
        return count(Brand::get());
    }

    public function brand()
    {
        return count(Brand::get());
    }

    public function allCategory()
    {
        return count(Category::get());
    }

    public function category()
    {
        return count(Category::get());
    }

    public function allGarage()
    {
        return count(Garage::get());
    }

    public function garage()
    {
        return count(UserGarage::where('user_id', auth()->user()->id)->get());
    }

    public function carCost()
    {
        return Car::orderByDesc('price')->first();
    }

    public function allData()
    {
        return [
            'brand'       => $this->brand(),
            'garage'      => $this->garage(),
            'carPrice'    => $this->carCost(),
            'car'         => $this->countCar(),
            'category'    => $this->category(),
            'allBrand'    => $this->allBrand(),
            'allGarage'   => $this->allGarage(),
            'allCar'      => $this->countAllCar(),
            'allCategory' => $this->allCategory(),
        ];
    }
}