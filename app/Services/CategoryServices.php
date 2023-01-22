<?php

namespace App\Services;

use App\Models\Category;

class CategoryServices
{
    public function index()
    {
        return Category::get();
    }

    public function store()
    {
        $postAjax = [
            'name'   => $_POST['name'],
            'status' => $_POST['status']
        ];

        Category::create($postAjax);
    }

    public function updated()
    {
        $oData = [
            'id'     => $_POST['id'],
            'name'   => $_POST['name'],
            'status' => $_POST['status']
        ];
        
        Category::whereId($oData['id'])->update($oData);
    }

}