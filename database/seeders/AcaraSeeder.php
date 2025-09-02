<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class AcaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 20 random and diverse acara names
        $acaraNames = [
            'Festival Budaya Nusantara',
            'Pameran Teknologi Tradisional',
            'Lomba Bahasa Daerah',
            'Konser Musik dan Tari Nusantara',
            'Pameran Pakaian dan Mode',
            'Festival Kuliner Khas Indonesia',
            'Turnamen Olahraga Tradisional',
            'Pentas Sastra dan Puisi',
            'Pagelaran Teater dan Drama',
            'Pameran Sejarah dan Warisan Budaya',
            'Festival Film dan Media',
            'Workshop Kerajinan Arsitektur Tradisional',
            'Pameran Nilai dan Norma Sosial',
            'Festival Kepercayaan dan Agama',
            'Pesta Laut dan Adat Pantai',
            'Pameran Ekonomi Kreatif dan UMKM',
            'Turnamen Permainan Rakyat',
            'Konferensi Bahasa dan Sastra',
            'Pentas Hiburan dan Stand-Up Comedy',
            'Pameran Seni Rupa Kontemporer',
        ];

        // 20 locations
        $locations = [
            'Jakarta', 'Bandung', 'Surabaya', 'Yogyakarta', 'Solo',
            'Semarang', 'Denpasar', 'Makassar', 'Medan', 'Palembang',
            'Padang', 'Manado', 'Pontianak', 'Balikpapan', 'Banjarmasin',
            'Malang', 'Cirebon', 'Bogor', 'Tangerang', 'Bekasi'
        ];

        // Available kategori IDs (1-15)
        $kategoriIds = range(1, 15);

        for ($i = 0; $i < 20; $i++) {
            // Insert into images table first
            $imageId = DB::table('images')->insertGetId([
                'img1'       => null,
                'img2'       => null,
                'img3'       => null,
                'video'      => null,
                'jenis'      => 'acara',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Random start & end dates
            $startDate = Carbon::now()->addDays(rand(1, 30));
            $endDate   = (clone $startDate)->addDays(rand(1, 5));

            // Random price for HTM (ticket)
            $htm = rand(0, 1) ? rand(10000, 150000) : 0;

            // Random kategori id (1-15)
            $kategoriId = $kategoriIds[array_rand($kategoriIds)];

            // Generate random panitia number
            $noPanitia = '08' . rand(100000000, 999999999);

            // Insert acara data
            DB::table('acara')->insert([
                'judul'         => $acaraNames[$i],
                'tanggal_mulai' => $startDate->toDateString(),
                'tanggal_akhir' => $endDate->toDateString(),
                'img'           => $imageId,
                'lokasi'        => "gedung kesenian".$locations[$i],
                'des_singkat'   => "Ikuti acara '{$acaraNames[$i]}' untuk merasakan pengalaman unik dan tak terlupakan.",
                'detail_acara'  => "Acara '{$acaraNames[$i]}' akan diselenggarakan di {$locations[$i]}. Kami menghadirkan pertunjukan, pameran, dan berbagai kegiatan menarik yang relevan dengan kategori acara ini. Jangan lewatkan kesempatan langka ini!",
                'htm'           => $htm,
                'no_panitia'    => $noPanitia,
                'asal'          => "Dinas Pariwisata {$locations[$i]}",
                'owner'         => rand(517, 1030),
                'created_at'    => now(),
                'updated_at'    => now(),
                'kategori_id'   => $kategoriId,
            ]);
        }
    }
}
