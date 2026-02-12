<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::insert([
            [
                'Kode_Barang' => 1,
                'Nama_Barang' => 'Laptop Dell',
                'Harga_Barang' => 20000000,
            ],
            [
                'Kode_Barang' => 2,
                'Nama_Barang' => 'Mouse Logitech',
                'Harga_Barang' => 25000000,
            ],
           
        ]);
    }
}
