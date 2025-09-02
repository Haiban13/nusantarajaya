<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index()
    {
        $data_acara = Acara::all();
        return view('acara.index', compact('data_acara'));
    }
    public function show($id)
    {
        $data_artikel = Acara::all();
        $data_acara = Acara::all();
        $data_user = User::all();
        $detail_acara = Acara::with(['images', 'owner'])->where('id', $id)->firstOrFail();
        //dd($detail_acara->getRelations()["owner"]->name);
        return view('acara.detail', compact('detail_acara', 'data_acara', 'data_artikel', 'data_user'));
    }

    public function search(Request $request)
{
    $query = $request->q;
$data_acara = Acara::all();
    $results = Acara::where('judul', 'like', '%' . $query . '%')
        ->orWhere('lokasi', 'like', '%' . $query . '%')
        ->orWhere('des_singkat', 'like', '%' . $query . '%')
        ->get();

    return view('acara.index', compact('results','data_acara'));
}

}