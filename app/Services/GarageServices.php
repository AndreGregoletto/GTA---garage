<?php

namespace App\Services;

use App\Models\Garage;

class GarageServices
{
    public function ajaxPost()
    {
        $response = [
            'name'    => $_POST['name'],
            'parking' => $_POST['parking'],
            'status'  => $_POST['status']
        ];
        return $response;
    }

    public function index()
    {
        return Garage::get();
    }

    public function store()
    {
        Garage::create($this->ajaxPost());
    }

    public function updated()
    {
        Garage::whereId($_POST['id'])->update($this->ajaxPost());
    }

    public function destroy($id)
    {
        Garage::whereId($id)->delete();
    }
}