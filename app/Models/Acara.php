<?php

namespace App\Models;

use Doctrine\DBAL\Schema\Column;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    //

    protected $table="acara";
    protected $fillable = [
        'judul',
        'tanggal_mulai',
        'tanggal_akhir',
        'img',
        'lokasi',
        'des_singkat',
        'detail_acara',
        'htm',
        'no_panitia',
        'kategori',
        'asal', // general provinsi
    ];
       public function images()
    {
        return $this->belongsTo(Image::class, 'img');
    }
}
