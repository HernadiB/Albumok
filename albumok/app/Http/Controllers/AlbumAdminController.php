<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAlbumRequest;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AlbumAdminController extends Controller
{
    public function index()
    {
//        return view("album-admin.view",[
//            'albums' => Album::all()
//        ]);
        $user = Auth::user();
        if($user->can("view-all-album"))
        {
            $albums = Album::all();
        }
        else if($user->can("view-own-album"))
        {
            $albums = Album::where("id", "=", Auth::user()->album->id)->get();
        }
        else
        {
            abort(403);
        }


        return view("album.view",[
            "albums" => $albums
        ]);
    }

    public function create()
    {
        Gate::authorize("create-album");
        return view("album.create", [
            "newAlbum" => Album::all()
        ]);
    }

    public function store(StoreAlbumRequest $request)
    {
        Gate::authorize("create-album");
        $data = $request->validated();
        $album = Album::create($data);
        $request->session()->flash("success", "Az album sikeresen feltöltve az adatbázisba.");
        return redirect()->route("album-admin.index");
        //return Album::create($data);
    }
}
