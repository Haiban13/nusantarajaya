<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $rows = Excel::toArray([], base_path('./daftar-kabupaten-kota-di-indonesia-excel.xlsx'))[0];
        array_shift($rows); // remove header

        foreach ($rows as $row) {
            User::create([
                'name' => $row[0],
                'email' => $row[0],
                'password' => bcrypt($row[1]), // default password
                // or 'admin', etc.
            ]);
        }
    }
}
