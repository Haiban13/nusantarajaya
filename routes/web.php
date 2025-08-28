<?php

use App\Filament\Pages\RegisterUser;
use App\Http\Controllers\SeachController;
use App\Models\Acara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/search-acara', [SeachController::class,"searchAcara"])->name('acara.search');
Route::get('/search-artikel', [SeachController::class,"searchArtikel"])->name('artikel.search');
Route::get('/search', [SeachController::class,"search"])->name('search');

Route::get('/', function () {
    return view('home');
});
Route::get('/acara', function () {

    return view('acara');
});
Route::get('/acara/1', function () {
    return view('acara-detail');
});
Route::get('/profile/1', function () {
    return view('user-profile');
})->name('user.profile');

Route::get('/about', function () {
    return view('about-we');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/artikel/1', function () {
    return view('artikel-detail');
});
Route::get('/tutorial', function () {
    return view('tutorial');
});
 