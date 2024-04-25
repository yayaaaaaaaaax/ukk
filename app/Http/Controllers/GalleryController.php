<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Album;
use App\Models\Likefoto;
use App\Models\Komentarfoto;
use App\Models\User;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index() {
        $album = Album::with('user')->get();
        $foto = Foto::with('user','album')->get();
        $user = User::all();
        $like = Likefoto::count();
        $komentarfoto = Komentarfoto::count();
        // $like = Likefoto::where('FotoID', $id)->count();
        // $komentarfoto = Komentarfoto::where('FotoID', $id)->count();
        return view('gallery', compact('album','foto','user','like','komentarfoto'));
    }
}