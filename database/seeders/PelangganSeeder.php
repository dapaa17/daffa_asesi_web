<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::insert([
            [
                'No_Pelanggan' => 1,
                'Nama_Pelanggan' => 'Budi ',
                'Alamat' => 'jakarta',
            ],
            [
                'No_Pelanggan' => 2,
                'Nama_Pelanggan' => 'Siti ',
                'Alamat' => 'Bandung',
            ],
           
        ]);
    }
}
