<?php

namespace App\Services;

use App\Models\User;


class AuthServices
{
    public function login(User $user, $oUser)
    {
        dd($user, $oUser);
    }

    public function store($oUser)
    {
        User::create($oUser);
        return redirect()->route('dashboard');
    }
}