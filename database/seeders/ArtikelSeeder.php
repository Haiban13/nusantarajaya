<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Image;
use App\Models\Artikel;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerId = User::first()->id ?? User::factory()->create()->id;

        $data = [
            [
                'judul' => 'Festival Budaya Nusantara',
                'tanggal_mulai' => '2025-09-01',
                'tanggal_akhir' => '2025-09-05',
                'img1' => 'images/festival-nusantara.jpeg',
                'des_singkat' => 'Festival budaya menampilkan seni dan tradisi Nusantara.',
            ],
            [
                'judul' => 'Pameran Batik Nasional',
                'tanggal_mulai' => '2025-08-20',
                'tanggal_akhir' => '2025-08-25',
                'img1' => 'images/pameran-batik.jpeg',
                'des_singkat' => 'Pameran batik dengan motif khas dari seluruh Indonesia.',
            ],
            [
                'judul' => 'Lomba Tari Daerah',
                'tanggal_mulai' => '2025-10-01',
                'tanggal_akhir' => '2025-10-03',
                'img1' => 'images/lomba-tari.jpeg',
                'des_singkat' => 'Kompetisi tari daerah dari berbagai provinsi.',
            ],
            [
                'judul' => 'Festival Kuliner Tradisional',
                'tanggal_mulai' => '2025-09-15',
                'tanggal_akhir' => '2025-09-17',
                'img1' => 'images/festival-kuliner.jpeg',
                'des_singkat' => 'Menikmati kuliner tradisional khas Nusantara.',
            ],
            [
                'judul' => 'Pameran Kerajinan Tangan',
                'tanggal_mulai' => '2025-11-05',
                'tanggal_akhir' => '2025-11-08',
                'img1' => 'images/kerajinan-tangan.jpeg',
                'des_singkat' => 'Pameran kerajinan tangan dari seluruh Indonesia.',
            ],
        ];

        foreach ($data as $item) {
            $image = Image::create([
                'img1'  => $item['img1'],
                'img2'  => null,
                'img3'  => null,
                'video' => null,
                'jenis' => "Artikel",
            ]);

            Artikel::create([
                'judul'         => $item['judul'],
                'tanggal_mulai' => $item['tanggal_mulai'],
                'tanggal_akhir' => $item['tanggal_akhir'],
                'img'           => $image->id,
                'des_singkat'   => $item['des_singkat'],
                'detail_acara'  => 'Detail acara lengkap mengenai ' . $item['judul'] . '.',
                'owner'         => $ownerId,
            ]);
        }
    }
}