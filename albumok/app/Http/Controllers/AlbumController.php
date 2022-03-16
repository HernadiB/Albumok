<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return view("album.view",[
            'albums' => Album::all()
        ]);
    }
}
