<?php

namespace App\Http\Controllers;

class BrandController extends Controller
{
    public function index()
    {
        return view('brand.index', ['aData' => app('brandService')->index()]);
    }

    public function store()
    {
        app('brandService')->store();
        return $this->show();
    }

    public function show()
    {
        return response()->json(app('brandService')->index());
    }

    public function updated()
    {
        app('brandService')->updated();
        return $this->show();
    }

    public function destroy()
    {
        app('brandService')->destroy($_POST['id']);
        return $this->show();
    }
}
