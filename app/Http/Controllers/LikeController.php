<?php

namespace App\Http\Controllers;

use App\Models\Likefoto;
use Illuminate\Http\Request;
use Carbon\Carbon;

class LikeController extends Controller
{
    public function like(String $id) {
    $like = Likefoto::where('FotoID', $id)->where('UserID', auth()->user()->UserID)->first();

    if ($like) {
        $like->delete();
        return back();
        // return 'like ada';
    } else {
        $tanggal = Carbon::now()->toDateTimeString();
        $likefoto = new Likefoto();
        $likefoto->FotoID = $id;
        $likefoto->UserID = auth()->user()->UserID;
        $likefoto->TanggalLike = $tanggal;
        $likefoto->save();
        return back();
        
    }

    } 
} 