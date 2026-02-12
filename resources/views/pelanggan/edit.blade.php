@extends('layouts.app')
@include('includes.navbar')
@section('content')
<div class="container mt-4">
    <div class="row mb-4">
        <div class="col-md-8">
            <h1>Edit Pelanggan</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('pelanggan.update', $pelanggan->No_Pelanggan) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="Nama_Pelanggan" class="form-label">Nama Pelanggan</label>
                            <input type="text" class="form-control @error('Nama_Pelanggan') is-invalid @enderror" 
                                id="Nama_Pelanggan" name="Nama_Pelanggan" value="{{ $pelanggan->Nama_Pelanggan }}" required>
                            @error('Nama_Pelanggan')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="Alamat" class="form-label">Alamat</label>
                            <textarea class="form-control @error('Alamat') is-invalid @enderror" 
                                id="Alamat" name="Alamat" rows="4" required>{{ $pelanggan->Alamat }}</textarea>
                            @error('Alamat')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
