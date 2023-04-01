<?php

namespace App\Http\Controllers;


class UserGarageController extends Controller
{
    public function index()
    {
        $response = app('userGarageService')->index();
        return view('home.myGarage', ['response' => $response]);
    }

    public function selectData()
    {
        return app('userGarageService')->comboSelect();
    }
}
