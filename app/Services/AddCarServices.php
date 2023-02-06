<?php

namespace App\Services;

use App\Models\Car;

class AddCarServices
{
    public function index()
    {
        return Car::whereStatus(1)->with('category', 'brand')->get();
    }
}