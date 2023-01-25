<?php

namespace App\Http\Controllers;

class CarController extends Controller
{
    public function index()
    {
        return view('car.index', ['aDatas' => app('carService')->index()]);
    }

    public function store()
    {
        app('carService')->store();
        return $this->show();
    }

    public function show()
    {
        return response()->json(app('carService')->index());
    }

    public function updated()
    {
        app('carService')->updated();
        return $this->show();
    }

    public function destroy()
    {
        app('carService')->destroy($_POST['id']);
        return $this->show();
    }
}
