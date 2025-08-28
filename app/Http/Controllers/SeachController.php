<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Str;
class SeachController extends Controller
{
    public function searchAcara(Request $request){
      
         $query = $request->get('q');

        $acara = Acara::where('judul', 'like', "%{$query}%")
                    ->orWhere('lokasi', 'like', "%{$query}%")
                    ->orWhere('des_singkat', 'like', "%{$query}%")
                    ->get();

        if ($acara->count() > 0) {
            $html = '<ul class="search-results">';
            foreach ($acara as $item) {
                $html .= '<li>
                    <strong>' . e($item->judul) . '</strong><br>
                    <small>' . e($item->lokasi) . '</small><br>
                    <span>' . e(Str::limit($item->des_singkat, 50)) . '</span>
                </li>';
            }
            $html .= '</ul>';
        } else {
            $html = '<p class="no-results">Tidak ada acara ditemukan' .'</p>';
        }

        return $html;
    }
    public function searchArtikel(Request $request){
         $query = $request->get('q');

        $artikel = Artikel::where('judul', 'like', "%{$query}%")
                    ->orWhere('tanggal_mulai', 'like', "%{$query}%")
                    ->orWhere('des_singkat', 'like', "%{$query}%")
                    ->get();

        if ($artikel->count() > 0) {
            $html = '<ul class="search-results">';
            foreach ($artikel as $item) {
                $html .= '<li>
                    <strong>' . e($item->judul) . '</strong><br>
                    <small>' . e($item->tanggal_mulai) . '</small><br>
                    <span>' . e(Str::limit($item->des_singkat, 50)) . '</span>
                </li>';
            }
            $html .= '</ul>';
        } else {
            $html = '<p class="no-results">Tidak ada artikel ditemukan</p>';
        }

        return $html;
    }
    public function search(Request $request){
         $query = $request->get('q');

        $artikel = Artikel::where('judul', 'like', "%{$query}%")
                    ->orWhere('tangal_mulai', 'like', "%{$query}%")
                    ->orWhere('des_singkat', 'like', "%{$query}%")
                    ->get();
        $acara =  Acara::where('judul', 'like', "%{$query}%")
                    ->orWhere('lokasi', 'like', "%{$query}%")
                    ->orWhere('des_singkat', 'like', "%{$query}%")
                    ->get();

        if ($artikel->count() > 0) {
            $html = '<ul class="search-results">';
            foreach ($artikel as $item) {
                $html .= '<li>
                    <strong>' . e($item->judul) . '</strong><br>
                    <small>' . e($item->tanggal_mulai) . '</small><br>
                    <span>' . e(Str::limit($item->des_singkat, 50)) . '</span>
                </li>';
            }
            $html .= '</ul>';
        } else if ($acara->count() > 0) {
            $html = '<ul class="search-results">';
            foreach ($acara as $item) {
                $html .= '<li>
                    <strong>' . e($item->judul) . '</strong><br>
                    <small>' . e($item->lokasi) . '</small><br>
                    <span>' . e(Str::limit($item->des_singkat, 50)) . '</span>
                </li>';
            }
            $html .= '</ul>';
        } else {
            $html = '<p class="no-results">Tidak ada acara atau artikel ditemukan</p>';
        }

        return $html;
    }
}
