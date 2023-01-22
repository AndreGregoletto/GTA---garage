<?php

namespace App\Services;

use App\Models\Brand;

class BrandServices
{
    public function index()
    {
        return Brand::get();
    }

    public function store()
    {
        $postAjax = [
            'name'   => $_POST['name'],
            'status' => $_POST['status']
        ];

        Brand::create($postAjax);
    }

    public function updated()
    {
        $oData = [
            'id'     => $_POST['id'],
            'name'   => $_POST['name'],
            'status' => $_POST['status']
        ];
        
        Brand::whereId($oData['id'])->update($oData);
    }
}