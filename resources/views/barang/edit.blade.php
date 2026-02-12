@extends('layouts.app')
@include('includes.navbar')

@section('content')
<div class="container mt-4">
    <div class="col-md-8 mx-auto">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            <div class="card-header">Edit Barang</div>

            <div class="card-body">
                <form action="{{ route('barang.update', $barang->Kode_Barang) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label>Nama Barang</label>
                        <input type="text"
                               name="Nama_Barang"
                               class="form-control"
                               value="{{ old('Nama_Barang', $barang->Nama_Barang) }}">
                    </div>

                    <div class="mb-3">
                        <label>Harga</label>
                        <input type="number"
                               name="Harga_Barang"
                               class="form-control"
                               value="{{ old('Harga_Barang', $barang->Harga_Barang) }}">
                    </div>

                    <div class="mb-3">
                        <label>Stok</label>
                        <input type="number"
                               name="Stok"
                               class="form-control"
                               value="{{ old('Stok', $barang->Stok) }}">
                    </div>

                    <button class="btn btn-primary">Update</button>
                    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
