@extends('layouts.app')
@include('includes.navbar')

@section('content')
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Data Barang</h5>
            <a href="{{ route('barang.create') }}" class="btn btn-primary btn-sm">
                + Tambah
            </a>
        </div>

        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-bordered table-hover align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th width="10%">Kode</th>
                            <th>Nama</th>
                            <th width="15%">Harga</th>
                            <th width="10%">Stok</th>
                            <th width="20%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($barangs as $barang)
                        <tr>
                            <td>{{ $barang->Kode_Barang }}</td>
                            <td class="text-start">{{ $barang->Nama_Barang }}</td>
                            <td>Rp {{ number_format($barang->Harga_Barang,0,',','.') }}</td>
                            <td>{{ $barang->Stok }}</td>
                            <td>
                                <div class="d-flex justify-content-center gap-2">
                                    
                                    
                                    <a href="{{ route('barang.edit', $barang->Kode_Barang) }}"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <!-- ini buat tombol hapusnya -->
                                    <form action="{{ route('barang.destroy', $barang->Kode_Barang) }}"
                                          method="POST"
                                          onsubmit="return confirm('Yakin hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">Data belum ada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $barangs->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
