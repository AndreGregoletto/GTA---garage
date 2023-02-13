<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Atuh\RequestLogin;
use App\Http\Requests\Atuh\RequestCreate;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(RequestLogin $request)
    {
        if(Auth::attempt($request->validated())){
            // toastr()->success('Bem-Vindo');
            return redirect()->route('home');
        }else{
            return back();
        }
    }

    public function create()
    {
        return view('auth.create');
    }

    public function store(RequestCreate $request)
    {
        app('authService')->store($request->validated());
        return redirect()->route('indexLogin');
    }

    public function destroy()
    {
        Auth::logout(auth()->user()->id);
        return redirect()->route('indexLogin');
    }
}
