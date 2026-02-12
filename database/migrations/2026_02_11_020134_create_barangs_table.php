<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id('Kode_Barang');
            $table->string('Nama_Barang', 50);
            $table->decimal('Harga_Barang', 12, 2);
            $table->integer('Stok')->default(0);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('barangs');
    }
};
