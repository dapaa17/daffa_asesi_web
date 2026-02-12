<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggans';
    protected $primaryKey = 'No_Pelanggan';
    public $timestamps = false;
    public $incrementing = true;

    protected $fillable = [
        'Nama_Pelanggan',
        'Alamat'
    ];
}
