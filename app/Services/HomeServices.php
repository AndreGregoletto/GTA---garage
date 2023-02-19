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
        return Car::whereStatus(1)->count();
    }

    public function countCar()
    {
        return UserCars::whereUserId(auth()->user()->id)->count();
    }

    public function allBrand()
    {
        return Brand::whereStatus(1)->count();
    }

    public function brand()
    {
        $cars    = UserCars::whereUserId(auth()->user()->id)->with('cars')->get();
        $brandId = [];

        foreach($cars as $car){
            $brandId[] = $car['cars'][0]['brand_id'];
        }

        return count(array_unique($brandId));
    }

    public function allCategory()
    {
        return Category::whereStatus(1)->count();
    }

    public function category()
    {
        $cars       = UserCars::whereUserId(auth()->user()->id)->with('cars')->get();
        $categoryId = [];

        foreach($cars as $car){            
            $categoryId[] = $car['cars'][0]['category_id'];
        }

        return count(array_unique($categoryId));
    }

    public function allGarage()
    {
        return Garage::whereStatus(1)->count();
    }

    public function garage()
    {
        return UserGarage::whereUserId(auth()->user()->id)->count();
    }

    public function carCost()
    {
        $cars = UserCars::whereUserId(auth()->user()->id)->with('cars')->get();
        $data = [];

        foreach($cars as $car){
            $data[] = [
                'id'    => $car['cars'][0]['id'],
                'price' => $car['cars'][0]['price']
            ];                      
        }    

        if($data){
            return Car::whereId(max($data)['id'])->first();
        }else{
            return Car::orderBy('price')->first();
        }
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