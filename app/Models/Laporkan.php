<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laporkan extends Model
{
    protected $table = "laporkan";

    protected $fillable = [
        'judul_acara',        // Judul acara
        'tanggal',            // Tanggal laporan / kejadian
        'id_dokumentasi',            // Tanggal laporan / kejadian
        'user_pembuat_acara', // ID atau nama user pembuat acara     
        'keterangan',         // Keterangan atau keluhan
        'jenis_keluhan',      // Jenis keluhan (penipuan, tidak amanah, dll)
    ];

}
