<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function create()
    {
        return view("register.create");
    }

    public function store(StoreRegisterRequest $request)
    {
        $data = $request->validated();
        $data["password"] = Hash::make($data["password"]);
        User::create($data);
        $request->session()->flash("success", "Sikeres regisztrálás.");
        return redirect()->route("home");
    }
}
