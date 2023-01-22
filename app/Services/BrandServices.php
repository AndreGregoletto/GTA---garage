<?php

namespace App\Services;

use App\Models\Brand;

class BrandServices
{
    public function index()
    {
        return Brand::get();
    }

    public function store($request)
    {
        Brand::create($request);
    }
}