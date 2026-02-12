<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = 'penjualans';

    protected $primaryKey = 'Faktur';
    public $incrementing = false;
    protected $keyType = 'string';

    public $timestamps = false; 

    protected $fillable = [
        'Faktur',
        'No_Pelanggan',
        'Tanggal_Penjualan'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(
            Pelanggan::class,
            'No_Pelanggan',
            'No_Pelanggan'
        );
    }
}
