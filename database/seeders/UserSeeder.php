<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Excel as Excel;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Buat user manual dulu
        DB::table('roles')->insert([
            'id' => 1,
            'name' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        User::create([
            'name' => 'Alwan',
            'email' => 'hafizsusilo86@gmail.com',
            'password' => bcrypt('123123123'),
            'role' => 1, // Pastikan role ID ini ada di tabel roles
        ]);


        // Lanjut proses dari file Excel
        $spreadsheet = IOFactory::load(base_path('database\seeders\daftar-kabupaten-kota-di-indonesia-excel.xlsx'));
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        array_shift($rows); // Remove header row

        foreach ($rows as $row) {
            $name = trim($row[0]);
            $email = strtolower(str_replace(' ', '', $name)) . '@gmail.com';
            $password = $row[1] ?? 'password'; // default

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => bcrypt($password),
            ]);
        }
    }
}