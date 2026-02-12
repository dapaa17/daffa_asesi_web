<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $primaryKey = 'Kode_Barang';
    public $timestamps = false;

    protected $fillable = [
        'Nama_Barang',
        'Harga_Barang',
        'Stok',
    ];
}
