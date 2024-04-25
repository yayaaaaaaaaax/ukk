<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Foto;
use App\Models\Komentarfoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KomentarController extends Controller
{

    public function komentar_action(Request $request) {
        $validatedData = $request->validate([
            'FotoID' => 'required',
            'IsiKomentar' => 'required',
        ]);

        $tanggal = Carbon::now()->toDateTimeString();

        $komentarfoto = new Komentarfoto();
        $komentarfoto->FotoID = $validatedData['FotoID'];
        if (Auth::check()) {
            $komentarfoto->UserID = $validatedData['UserID'] = auth()->user()->UserID;
        }
        $komentarfoto->IsiKomentar = $validatedData['IsiKomentar'];
        $komentarfoto->TanggalKomentar = $tanggal;
        // dd($request);
        $komentarfoto->save();
        return redirect()->back()->with('success', 'tambah data sukses');
    }

    public function destroy(string $id)
    {
        $komentar = Komentarfoto::find($id);
        $komentar->delete();
        return redirect('/halamanfoto')->with('success', 'tambah data sukses');
    }
}