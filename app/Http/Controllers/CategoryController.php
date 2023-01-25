<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index', ['aData' => app('categoryService')->index()]);
    }

    public function store()
    {
        app('categoryService')->store();
        return $this->show();
    }

    public function show()
    {
        return response()->json(app('categoryService')->index());
    }

    public function updated()
    {
        app('categoryService')->updated();
        return $this->show();
    }

    public function destroy()
    {
        app('categoryService')->destroy($_POST['id']);
        return $this->show();
    }
}
