<?php

namespace Database\Seeders;

use App\Models\Approval;
use App\Models\Artikel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArtikelApprovalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
     public function run(): void
    {
        // Ambil admin pertama untuk diset sebagai approved_by
        $admin = User::where('id', 1032)->first();

        // Ambil semua artikel
        $artikels = Artikel::all();

        foreach ($artikels as $artikel) {
            Approval::updateOrCreate(
                [
                    'artikel_id' => $artikel->id,
                ],
                [
                    'approve'     => true,
                    'approved_by' => $admin ? $admin->id : null,
                ]
            );
        }

        $this->command->info("✅ Semua artikel sudah disetujui!");
    }
}
