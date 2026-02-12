<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;
//ini buat dashboardnya
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard', [DashboardController::class, 'index']);


//ini buat penjualannya
Route::get('/penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
Route::get('/penjualan/create', [PenjualanController::class, 'create'])->name('penjualan.create');
Route::post('/penjualan/store', [PenjualanController::class, 'store'])->name('penjualan.store');
Route::get('/penjualan/edit/{faktur}', [PenjualanController::class, 'edit'])->name('penjualan.edit');
Route::put('/penjualan/update/{faktur}', [PenjualanController::class, 'update'])->name('penjualan.update');
Route::delete('/penjualan/delete/{faktur}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');

//ini buat pelanggannya
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan.index');
Route::get('/pelanggan/create', [PelangganController::class, 'create'])->name('pelanggan.create');
Route::post('/pelanggan/store', [PelangganController::class, 'store'])->name('pelanggan.store');
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::put('/pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');
Route::delete('/pelanggan/delete/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');


//ini buat barangnya
Route::get('/barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('/barang/store', [BarangController::class, 'store'])->name('barang.store');
Route::get('/barang/edit/{id}', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('/barang/update/{id}', [BarangController::class, 'update'])->name('barang.update');
Route::delete('/barang/delete/{id}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::resource('barang', BarangController::class);