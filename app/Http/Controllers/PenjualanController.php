<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    public function index()
    {
        $penjualans = Penjualan::with('pelanggan')->simplePaginate(10);
        return view('penjualan.index', compact('penjualans'));
    }

    public function create()
    {
        $pelanggans = Pelanggan::all();
        return view('penjualan.create', compact('pelanggans'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'No_Pelanggan' => 'required|exists:pelanggans,No_Pelanggan',
            'Tanggal_Penjualan' => 'required|date'
        ]);

        Penjualan::create($validated);

        return redirect()->route('penjualan.index')
            ->with('success', 'Data penjualan berhasil ditambahkan');
    }

    public function edit($faktur)
    {
        $penjualan = Penjualan::where('Faktur', $faktur)->firstOrFail();
        $pelanggans = Pelanggan::all();

        return view('penjualan.edit', compact('penjualan', 'pelanggans'));
    }

    public function update(Request $request, $faktur)
    {
        $validated = $request->validate([
            'No_Pelanggan' => 'required|exists:pelanggans,No_Pelanggan',
            'Tanggal_Penjualan' => 'required|date'
        ]);

        $penjualan = Penjualan::where('Faktur', $faktur)->firstOrFail();
        $penjualan->update($validated);

        return redirect()->route('penjualan.index')
            ->with('success', 'Data penjualan berhasil diupdate');
    }

    public function destroy($faktur)
    {
        Penjualan::where('Faktur', $faktur)->delete();

        return redirect()->route('penjualan.index')
            ->with('success', 'Data penjualan berhasil dihapus');
    }
}
