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

    public function addCarUser()
    {
        return app('addCarService')->addCar($_POST['id']);
    }

    public function addGarage()
    {
        return view('home.addGarage');
    }

    public function addGarageAjaxView()
    {
        return app('addGarageService')->index();
    }

    public function addGarageAjax()
    {
        return app('addGarageService')->addGarage($_POST['id']);
    }
}
