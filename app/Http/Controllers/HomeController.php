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
        return view('home.addCar', ['datas' => app('addCarService')->index()]);
    }

    public function addGarage()
    {
        return view('home.addGarage');
    }
}
