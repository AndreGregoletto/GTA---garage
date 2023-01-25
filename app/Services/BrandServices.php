<?php

namespace App\Services;

use App\Models\Brand;

class BrandServices
{
    public function ajaxPost()
    {
        $response = [
            'name'   => $_POST['name'],
            'status' => $_POST['status']
        ];

        return $response;
    }

    public function index()
    {
        return Brand::get();
    }

    public function store()
    {
        Brand::create($this->ajaxPost());
    }

    public function updated()
    {
        Brand::whereId($_POST['id'])->update($this->ajaxPost());
    }

    public function destroy($id)
    {
        Brand::whereId($id)->delete();
    }
}