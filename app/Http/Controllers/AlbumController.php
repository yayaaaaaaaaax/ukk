<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Foto;
use App\Models\User;
use App\Models\Album;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    public function index() {
        $user = User::all();
        // $album = Album::with('user')->get();
        $album = User::join('albums','albums.UserID','=','users.UserID')->get();
        return view('albumcreate', compact('album','user'));
    }

    public function album_action(Request $request) {
        $validatedData = $request->validate([
            'NamaAlbum' => 'required',
            'Deskripsi' => 'required',
        ]);

        $tanggal = Carbon::now()->toDateTimeString();

        $album = new Album;
        $album->NamaAlbum = $validatedData['NamaAlbum'];
        $album->Deskripsi = $validatedData['Deskripsi'];
        if (Auth::check()) {
            $album->UserID = $validatedData['UserID'] = auth()->user()->UserID;
        }
        $album->TanggalDibuat = $tanggal;
        $album->save();
            
        return redirect()->back()->with('success', 'tambah data sukses');
    }


    public function album(String $id) {
        $album = Album::all();
        // $albumfoto = Album::where('AlbumID', $id)->with('foto')->get();
        $albumfoto = Album::join('fotos','fotos.AlbumID','=','albums.AlbumID')->where('albums.AlbumID',$id)->get();

        // dd($albumfoto);
        // return $albumfoto;
        return view('albumfoto', compact('albumfoto','album'));
    }

    public function edit(String $id)
    {
        $user = User::all();
        $albumnav = Album::all();
        $album = Album::where('AlbumID', $id)->first();
        return view('albumedit', compact('user', 'albumnav','album'));
    }

    public function update(Request $request, String $id) {
        $validatedData = $request->validate([
            'NamaAlbum' => 'required',
            'Deskripsi' => 'required',
        ]);

        $tanggal = Carbon::now()->toDateTimeString();


        $Album = Album::where('AlbumID', $id)->first();
        $Album->NamaAlbum = $validatedData['NamaAlbum'];
        $Album->Deskripsi = $validatedData['Deskripsi'];
        $Album->TanggalDibuat = $tanggal;
        if (Auth::check()) {
            $Album->UserID = $validatedData['UserID'] = auth()->user()->UserID;
        }
        // dd($request);
        $Album->update();
        return redirect('/album')->with('success', 'edit data sukses');

        
    }

    public function destroy(string $id)
    {
        $album = Album::find($id);
        $album->delete();
        return redirect()->back()->with('success', 'tambah data sukses');
    }

    
} 