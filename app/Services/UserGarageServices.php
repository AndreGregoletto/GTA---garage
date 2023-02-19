<?php

namespace App\Services;

use App\Models\UserGarage;

class UserGarageServices
{
    public function index()
    {
        return $this->garage();
    }

    public function garage()
    {
        return UserGarage::whereUserId(auth()->user()->id)->with('garages')->get();
    }
}