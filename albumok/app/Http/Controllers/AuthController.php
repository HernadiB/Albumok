<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login");
    }

    public function authenticate(LoginRequest $request)
    {
        $data = $request->validated();
        if(!Auth::attempt($data))
        {
            $request->session()->flash("danger","Sikertelen bejelentkezés!");
            return redirect()->route("auth.login");
        }
        $request->session()->flash("success","Sikeres bejelentkezés!");
        return redirect()->route("home");
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flash("success","Sikeres kijelentkezés!");
        return redirect()->route("home");
    }
}
