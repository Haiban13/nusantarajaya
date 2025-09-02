<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index()
    {
        $data_artikel = Artikel::all();
        $detail_artikel = Artikel::all();
        return view('artikel.index', compact('data_artikel', 'detail_artikel'));
    }

    public function show($id)
    {
        $data_artikel = Artikel::all();
        $data_acara = Acara::all();
        $detail_artikel = Artikel::with(['images', 'owner'])->where('id', $id)->firstOrFail();
    
        return view('artikel.detail', compact('detail_artikel', 'data_artikel','data_acara'));
    }
}