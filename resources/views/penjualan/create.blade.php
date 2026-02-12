@extends('layouts.app')

@section('content')
@include('includes.navbar')

<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1>Tambah Penjualan</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                    {{-- ERROR VALIDASI --}}
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

                    <form action="{{ route('penjualan.store') }}" method="POST">
                        @csrf

                      

                        {{-- PELANGGAN --}}
                        <div class="mb-3">
                            <label for="No_Pelanggan" class="form-label">Pilih Pelanggan *</label>
                            <select class="form-control @error('No_Pelanggan') is-invalid @enderror"
                                    id="No_Pelanggan"
                                    name="No_Pelanggan"
                                    required>
                                <option value="">-- Pilih Pelanggan --</option>
                                @foreach ($pelanggans as $pelanggan)
                                    <option value="{{ $pelanggan->No_Pelanggan }}"
                                        {{ old('No_Pelanggan') == $pelanggan->No_Pelanggan ? 'selected' : '' }}>
                                        {{ $pelanggan->No_Pelanggan }} - {{ $pelanggan->Nama_Pelanggan }}
                                    </option>
                                @endforeach
                            </select>
                            @error('No_Pelanggan')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- TANGGAL --}}
                        <div class="mb-3">
                            <label for="Tanggal_Penjualan" class="form-label">Tanggal Penjualan *</label>
                            <input type="date"
                                   class="form-control @error('Tanggal_Penjualan') is-invalid @enderror"
                                   id="Tanggal_Penjualan"
                                   name="Tanggal_Penjualan"
                                   value="{{ old('Tanggal_Penjualan', date('Y-m-d')) }}"
                                   required>
                            @error('Tanggal_Penjualan')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">
                                Simpan Penjualan
                            </button>
                            <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
                                Batal
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
