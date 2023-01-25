<?php

namespace App\Services;

use App\Models\Category;

class CategoryServices
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
        return Category::get();
    }

    public function store()
    {
        Category::create($this->ajaxPost());
    }

    public function updated()
    {
        Category::whereId($_POST['id'])->update($this->ajaxPost());
    }

    public function destroy($id)
    {
        Category::whereId($id)->delete();
    }
}