<?php

namespace App\Services;

use App\Models\Garage;

class GarageServices
{
    public function index()
    {
        return Garage::get();
    }

    public function store()
    {
        $postAjax = [
            'name'    => $_POST['name'],
            'parking' => $_POST['parking'],
            'status'  => $_POST['status']
        ];

        Garage::create($postAjax);
    }

    public function updated()
    {
        $oData = [
            'id'      => $_POST['id'],
            'name'    => $_POST['name'],
            'parking' => $_POST['parking'],
            'status'  => $_POST['status']
        ];
        
        Garage::whereId($oData['id'])->update($oData);
    }

}