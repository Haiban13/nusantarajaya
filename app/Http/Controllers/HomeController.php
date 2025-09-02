<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Acara;
use App\Models\Artikel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data_artikel = Artikel::latest()->take(6)->get();
        $data_acara = Acara::latest()->take(6)->get();

        $top_user = User::latest()->take(5)->get();
        // $acara = Acara::all();
        return view('index', compact('data_artikel', 'data_acara', 'top_user'));
    }
}