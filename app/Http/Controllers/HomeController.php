<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', ['datas' => app('homeService')->allData()]);
    }

    public function addCar()
    {
        return view('home.addCar');
    }

    public function addCarAjax()
    {
        return app('addCarService')->index();
    }

    public function comboBrandCategor()
    {
        return app('addCarService')->comboBrandCategor();
    }

    public function addGarage()
    {
        return view('home.addGarage');
    }

}
