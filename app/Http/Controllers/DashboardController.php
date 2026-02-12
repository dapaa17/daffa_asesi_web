<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Penjualan;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $barangs = Barang::all();
        $pelanggans = Pelanggan::all();
        $penjualans = Penjualan::all();
        
        $totalBarang = Barang::count();
        $totalPelanggan = Pelanggan::count();
        $totalPenjualan = Penjualan::count();
        
        return view('dashboard', compact('barangs', 'pelanggans', 'penjualans', 'totalBarang', 'totalPelanggan', 'totalPenjualan'));
    }
}
