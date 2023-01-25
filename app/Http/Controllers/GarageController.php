<?php

namespace App\Http\Controllers;

class GarageController extends Controller
{
    public function index()
    {
        return view('garage.index', ['aData' => app('garageService')->index()]);
    }

    public function store()
    {
        app('garageService')->store();
        return $this->show();
    }

    public function show()
    {
        return response()->json(app('garageService')->index());
    }

    public function updated()
    {
        app('garageService')->updated();
        return $this->show();
    }

    public function destroy()
    {
        app('garageService')->destroy($_POST['id']);
        return $this->show();
    }
}
