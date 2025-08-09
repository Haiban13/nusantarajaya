<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/acara', function () {
    return view('info-acara');
});
Route::get('/about', function () {
    return view('about-we');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/tutorial', function () {
    return view('tutorial');
});