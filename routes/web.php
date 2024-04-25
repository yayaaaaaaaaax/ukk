<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FotoController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// rute home
Route::get('home', [DashboardController::class, 'index'])->name('home'); 

// rute halaman dan crud album
Route::get('album', [AlbumController::class, 'index'])->name('index');
Route::post('album', [AlbumController::class, 'album_action'])->name('album.action');
Route::get('albumfoto/{AlbumID}', [AlbumController::class, 'album'])->name('album');
Route::get('albumedit/{AlbumID}', [AlbumController::class, 'edit'])->name('edit');
Route::post('albumedit/{AlbumID}', [AlbumController::class, 'update'])->name('update');
Route::get('hapusalbum/{AlbumID}', [AlbumController::class, 'destroy'])->name('destroy');

// rute halaman dan crud foto
Route::get('halamanfoto', [FotoController::class, 'index'])->name('index');
Route::post('halamanfoto', [FotoController::class, 'foto_action'])->name('foto.action');
Route::get('detailfoto/{FotoID}', [FotoController::class, 'show'])->name('show'); 
Route::get('edit-foto/{FotoID}', [FotoController::class, 'edit'])->name('edit');
Route::post('edit-foto/{FotoID}', [FotoController::class, 'update'])->name('update');
Route::get('hapusfoto/{FotoID}', [FotoController::class, 'destroy'])->name('destroy'); 

// rute halaman galeri
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// rute komentar foto
Route::post('detailfoto/{FotoID}', [KomentarController::class, 'komentar_action'])->name('komentar.action');
Route::get('detailfoto/hapuskomentar/{KomentarID}', [KomentarController::class, 'destroy'])->name('destroy');

// rute like foto
Route::get('/detailfoto/likefoto/{FotoID}', [LikeController::class, 'like']);
