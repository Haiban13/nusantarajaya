<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\SeachController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;


 
Route::get('/profile/{id}', [ProfileController::class, 'show'])->name('profile.show');


Route::get('/test', function () {
    return view('test');
});
Route::get('/about', function () {
    return view('about-we');
});


Route::get('/games', function () {
    return view('game');
})->name('games');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

// Halaman daftar budaya
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{id}', [ArtikelController::class, 'show'])->name('artikel.show');

Route::get('/', [HomeController::class, 'index'])->name('index');


Route::get('/acara', [AcaraController::class, 'index'])->name('acara.index');
Route::get('/acara/{id}', [AcaraController::class, 'show'])->name('acara.show');
Route::get('/search-acara', [AcaraController::class, 'search']);



Route::get('/search-acara', [SeachController::class, "searchAcara"])->name('acara.search');
Route::get('/search-artikel', [SeachController::class, "searchArtikel"])->name('artikel.search');
Route::get('/search', [SeachController::class, "search"])->name('search');



// help
Route::view('/syarat-dan-ketentuan', 'help.syarat-dan-ketentuan')->name('syarat');
Route::view('/kebijakan-privasi', 'help.kebijakan-privasi')->name('privasi');
Route::view('/pusat-bantuan', 'help.pusat-bantuan')->name('bantuan');


Route::get('/tutorial', function () {
    return view('tutorial');
});