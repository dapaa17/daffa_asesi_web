@extends('layouts.app')

@include('includes.navbar')

@section('content')
    <div class="container mt-4">

        <div class="card shadow-sm">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Daftar Penjualan</h5>
                <a href="{{ route('penjualan.create') }}" class="btn btn-primary btn-sm">
                    + Tambah Penjualan
                </a>
            </div>

            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table table-bordered table-hover align-middle text-center">
                        <thead class="table table-striped table-hover">
                            <tr>
                                <th>No Pelanggan</th>
                                <th>Nama Pelanggan</th>
                                <th>Tanggal Penjualan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($penjualans as $penjualan)
                                <tr>
                                    <td>{{ $penjualan->Faktur }}</td>
                                    <td>{{ $penjualan->No_Pelanggan }}</td>
                                    <td class="text-start">
                                        {{ $penjualan->pelanggan->Nama_Pelanggan ?? '-' }}
                                    </td>
                                    <td>
                                        {{ $penjualan->Tanggal_Penjualan ? \Carbon\Carbon::parse($penjualan->Tanggal_Penjualan)->format('d/m/Y') : '-' }}
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-center gap-2">
                                            <a href="{{ route('penjualan.edit', $penjualan->Faktur) }}"
                                                class="btn btn-warning btn-sm">
                                                Edit
                                            </a>

                                            <form action="{{ route('penjualan.destroy', $penjualan->Faktur) }}"
                                                method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
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
                                    <td colspan="5">Data penjualan belum tersedia</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-3 d-flex justify-content-center">
                    {{ $penjualans->links() }}
                </div>

            </div>
        </div>
    </div>
@endsection
