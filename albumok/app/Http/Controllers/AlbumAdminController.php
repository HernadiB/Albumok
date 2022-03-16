<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumAdminController extends Controller
{
    public function index()
    {
        return view("album-admin.view",[
            'albums' => Album::all()
        ]);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            "title" => ["required", "string", "max:45"],
            "released" => ["required", "integer"],
            "genre" => ["required", "string", "max:45"],
            "tcc" => ["required", "boolean"],
            "sales" => ["required", "integer"],
            "cover" => ["required", "string", "max:100"]
        ]);
        return Album::create($data);
    }
}
