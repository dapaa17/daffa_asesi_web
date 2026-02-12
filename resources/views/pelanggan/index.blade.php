@extends('layouts.app')
@include('includes.navbar')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Data Pelanggan</h5>
                </div>

                <div class="card-body">
                    <div class="d-flex justify-content-end mb-3">
                        <a href="/pelanggan/create" class="btn btn-secondary">
                            Tambahkan Pelanggan
                        </a>
                    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show">
            <strong>Sukses!</strong> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No Pelanggan</th>
                                <th>Nama Pelanggan</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pelanggans as $pelanggan)
                                <tr>
                                    <td>{{ $pelanggan->No_Pelanggan }}</td>
                                    <td>{{ $pelanggan->Nama_Pelanggan }}</td>
                                    <td>{{ $pelanggan->Alamat }}</td>
                                    <td>
                                        <a href="{{ route('pelanggan.edit', $pelanggan->No_Pelanggan) }}" class="btn btn-sm btn-warning">Edit</a>
                                        <form action="{{ route('pelanggan.destroy', $pelanggan->No_Pelanggan) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                        {{ $pelanggans->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
