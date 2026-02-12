<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::paginate(10);
        return view('barang.index', compact('barangs'));
    }

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama_Barang'  => 'required|string|max:50',
            'Harga_Barang' => 'required|numeric',
            'Stok'         => 'required|numeric',
        ]);

        Barang::create([
            'Nama_Barang'  => $request->Nama_Barang,
            'Harga_Barang' => $request->Harga_Barang,
            'Stok'         => $request->Stok,
        ]);

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil ditambahkan');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama_Barang'  => 'required|string|max:50',
            'Harga_Barang' => 'required|numeric',
            'Stok'         => 'required|numeric',
        ]);

        $barang = Barang::findOrFail($id);
        $barang->update($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil diupdate');
    }

    public function destroy($id)
    {
        Barang::destroy($id);

        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil dihapus');
    }
}
