<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * ini buat tampilannya.
     */
    public function index()
    {
        $pelanggans = Pelanggan::simplePaginate(10);
        return view('pelanggan.index', compact('pelanggans'));
    }

    /**
     * ini buat create.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * ini buat strore.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Nama_Pelanggan' => 'required|string|max:50',
            'Alamat' => 'required|string|max:100',
        ]);

        Pelanggan::create([
            'Nama_Pelanggan' => $request->Nama_Pelanggan,
            'Alamat' => $request->Alamat,
        ]);

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan Berhasil Ditambahkan');
    }

    /**
     * ini tuh buat edit
     */
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * buat update datanya
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama_Pelanggan' => 'required|string|max:50',
            'Alamat' => 'required|string|max:100',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update([
            'Nama_Pelanggan' => $request->Nama_Pelanggan,
            'Alamat' => $request->Alamat,
        ]);

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan Berhasil Diupdate');
    }

    /**
     * buat hapus datanya.
     */
    public function destroy($id)
    {
        Pelanggan::destroy($id);

        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan Berhasil Dihapus');
    }
}
