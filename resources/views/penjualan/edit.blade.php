@extends('layouts.app')
@include('includes.navbar')
@section('content')
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1>Edit Penjualan</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Validasi Error:</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('penjualan.update', $penjualan->Faktur) }}" method="POST">
                        @csrf
                        @method('PUT')

                       
                        <div class="mb-3">
                            <label for="No_Pelanggan" class="form-label">Pilih Pelanggan *</label>
                            <select class="form-control @error('No_Pelanggan') is-invalid @enderror" 
                                id="No_Pelanggan" name="No_Pelanggan" required>
                                <option value="">-- Pilih Pelanggan --</option>
                                @forelse ($pelanggans as $pelanggan)
                                    <option value="{{ $pelanggan->No_Pelanggan }}" {{ $penjualan->No_Pelanggan == $pelanggan->No_Pelanggan ? 'selected' : '' }}>
                                        {{ $pelanggan->No_Pelanggan }} - {{ $pelanggan->Nama_Pelanggan }}
                                    </option>
                                @empty
                                    <option disabled>-- Tidak ada pelanggan --</option>
                                @endforelse
                            </select>
                            @error('No_Pelanggan')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Tanggal_Penjualan" class="form-label">Tanggal Penjualan *</label>
                            <input type="date" class="form-control @error('Tanggal_Penjualan') is-invalid @enderror" 
                                id="Tanggal_Penjualan" name="Tanggal_Penjualan" value="{{ $penjualan->Tanggal_Penjualan }}" required>
                            @error('Tanggal_Penjualan')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Update Penjualan</button>
                            <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
