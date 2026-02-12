<?php

namespace Database\Seeders;

use App\Models\Penjualan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        Penjualan::insert([
            [
                'Faktur' => 1,
                'No_Pelanggan' => 1,
                'Tanggal_Penjualan' => '2026-02-01',
            ],
            [
                'Faktur' => 2,
                'No_Pelanggan' => 2,
                'Tanggal_Penjualan' => '2026-02-02',
            ],
           
        ]);
    }
}
