@extends('layouts.app')
@include('includes.navbar')

@section('content')
<div class="container mt-4">
    <div class="col-md-8 mx-auto">
        <div class="card">
            <div class="card-header">Tambah Barang</div>
            <div class="card-body">
                <form action="{{ route('barang.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <input type="text" name="Nama_Barang" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="number" name="Harga_Barang" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label>Stok</label>
                        <input type="number" name="Stok" class="form-control">
                    </div>

                    <button class="btn btn-primary">Simpan</button>
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
