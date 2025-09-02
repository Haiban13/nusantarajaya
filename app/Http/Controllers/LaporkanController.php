<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Dokumentasi;
use App\Models\Laporkan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporkanController extends Controller
{
    
     public function store(Request $request)
    {
        // Validate input
        $validated = $request->validate([
            'acara_id'       => 'required|exists:acara,id',
            'tanggal'        => 'required|date',
            'keterangan'     => 'required|string|max:2000',
            'jenis_keluhan'  => 'required|string|max:100',
            'img1'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'img2'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'img3'           => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'video'          => 'nullable|mimetypes:video/mp4,video/avi,video/mpeg|max:10240',
        ]);
        
       // dd($validated);
        // Get the logged-in user
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu.');
        }

        $user = Auth::user();
        $acara = Acara::findOrFail($validated['acara_id']);

        // Prevent duplicate reports
        $alreadyReported = Laporkan::where('user_pelapor_id', $user->id)
            ->where('acara_id', $validated['acara_id'])
            ->first();

        if ($alreadyReported) {
            // Redirect to Filament edit page for this report
            return redirect()->route('filament.admin.resources.laporkans.edit', $alreadyReported->id)
                ->with('info', 'Anda sudah melaporkan acara ini. Silakan perbarui laporan Anda.');
        }
 

        // Handle file uploads (store outside storage folder)
        $uploadPath = public_path('dokumentasi');
        if (!file_exists($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $dataDokumentasi = [];
        foreach (['img1', 'img2', 'img3', 'video'] as $file) {
            if ($request->hasFile($file)) {
                $path = $request->file($file)->store('dokumentasi', 'public');
                $dataDokumentasi[$file] = $path;
            }
        }


        // Create dokumentasi record
        $dokumentasi = Dokumentasi::create($dataDokumentasi);

        // Create laporan record
        $laporkan = Laporkan::create([
            'acara_id'           => $validated['acara_id'],
            'tanggal'            => $validated['tanggal'],
            'user_acara_id'         => $acara->owner ?? null,
            'user_pelapor_id'       => $user->id,
            'keterangan'         => $validated['keterangan'],
            'jenis_keluhan'      => $validated['jenis_keluhan'],
            'dokumentasi'     => $dokumentasi->id,
        ]);
        return redirect()
    ->route('acara.show', $validated['acara_id']) // <-- redirect wherever you want
    ->with('success', 'Laporan berhasil dikirim!');
            
    }
}
