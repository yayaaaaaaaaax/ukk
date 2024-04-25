<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\User;
use App\Models\Album;
use App\Models\Komentarfoto;
use App\Models\Likefoto;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class FotoController extends Controller
{
    public function index() {
        $user = User::all();
        $album = Album::all();
        // $foto = Foto::all();
        $userfoto = User::join('fotos','fotos.UserID','=','users.UserID')->where('users.UserID', Auth::user()->UserID)->get();
        return view('fotocreate', compact('userfoto','user', 'album'));
    }


    public function foto_action(Request $request) {
        $validatedData = $request->validate([
            'JudulFoto' => 'required',
            'DeskripsiFoto' => 'required',
            'LokasiFile' => 'required',
            'AlbumID' => 'required',
        ]);

        $tanggal = Carbon::now()->toDateTimeString();

        if ($request->file('LokasiFile')) {
            $extension = $request->file('LokasiFile')->getClientOriginalExtension();
            $newName = $request->JudulFoto.'-'.now()->timestamp.'.'.$extension;
            $path = $request->file('LokasiFile')->storeAs('image', $newName, 'public');
        }

        // $request['LokasiFile'] = $newName;
        $foto = new Foto;
        $foto->JudulFoto = $validatedData['JudulFoto'];
        $foto->DeskripsiFoto = $validatedData['DeskripsiFoto'];
        $foto->TanggalUnggah = $tanggal;
        $foto->LokasiFile = $path;
        $foto->AlbumID = $validatedData['AlbumID'];
        if (Auth::check()) {
            $foto->UserID = $validatedData['UserID'] = auth()->user()->UserID;
        }
        $foto->save();
        // $foto = Foto::create($request->all());
        return redirect()->back()->with('success', 'tambah data sukses');
    }

    public function show(String $id) {
        // $user = User::all();
        $album = Album::all();
        $albumfoto = Album::join('fotos','fotos.AlbumID','=','albums.AlbumID')->where('fotos.FotoID', $id)->first();
        $userfoto = User::join('fotos','fotos.UserID','=','users.UserID')->where('fotos.FotoID', $id)->first();
        $foto = Foto::all()->where('FotoID', $id)->first();
        // $foto = Foto::select('FotoID','JudulFoto','DeskripsiFoto','TanggalUnggah','LokasiFile','AlbumID','UserID')->where('FotoID', $FotoID)->firstOrFail();
        $like = Likefoto::where('FotoID', $id)->count();
        $komentarfoto = Komentarfoto::where('FotoID', $id)->count();
        // $komentar = Komentarfoto::where('FotoID', $id)->get();
        $userkomentar = User::join('komentarfotos','komentarfotos.UserID','=','users.UserID')->where('komentarfotos.FotoID', $id)->get();
        return view('detailfoto', compact('foto','album','albumfoto','like','komentarfoto','userkomentar','userfoto'));
    }

    // public function show_action(Request $request) {
    //     $validatedData = $request->validate([
    //         'FotoID' => 'required',
    //         'IsiKomentar' => 'required',
    //     ]);

    //     $tanggal = Carbon::now()->toDateTimeString();

    //     $komentarfoto = new Komentarfoto();
    //     $komentarfoto->FotoID = $validatedData['FotoID'];
    //     if (Auth::check()) {
    //         $komentarfoto->UserID = $validatedData['UserID'] = auth()->user()->UserID;
    //     }
    //     $komentarfoto->IsiKomentar = $validatedData['IsiKomentar'];
    //     $komentarfoto->TanggalKomentar = $tanggal;
    //     // dd($request);
    //     $komentarfoto->save();
    //     return redirect()->back()->with('success', 'tambah data sukses');

    // }

    public function edit(String $id)
    {
        $user = User::all();
        $album = Album::all();
        $foto = Foto::where('FotoID', $id)->first();
        return view('fotoedit', compact('foto','user', 'album'));
    }

    public function update(Request $request, String $id) {
        $validatedData = $request->validate([
            'JudulFoto' => 'required',
            'DeskripsiFoto' => 'required',
            'LokasiFile' => 'required',
            'AlbumID' => 'required',
        ]);

        $tanggal = Carbon::now()->toDateTimeString();

        if ($request->file('LokasiFile')) {
            $extension = $request->file('LokasiFile')->getClientOriginalExtension();
            $newName = $request->JudulFoto.'-'.now()->timestamp.'.'.$extension;
            $path = $request->file('LokasiFile')->storeAs('image', $newName, 'public');
        }

        $foto = Foto::where('FotoID', $id)->first();
        $foto->JudulFoto = $validatedData['JudulFoto'];
        $foto->DeskripsiFoto = $validatedData['DeskripsiFoto'];
        $foto->TanggalUnggah = $tanggal;
        $foto->LokasiFile = $path;
        $foto->AlbumID = $validatedData['AlbumID'];
        if (Auth::check()) {
            $foto->UserID = $validatedData['UserID'] = auth()->user()->UserID;
        }
        // dd($request);
        $foto->update();
        return redirect('/halamanfoto')->with('success', 'edit data sukses');

        
    }

    public function destroy(string $id)
    {
        $foto = Foto::find($id);
        $foto->delete();
        return redirect()->back()->with('success', 'tambah data sukses');
    }

}
