<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * migration run
     */
    public function up(): void
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id('Faktur');
            $table->unsignedBigInteger('No_Pelanggan');
            $table->date('Tanggal_Penjualan');
            $table->foreign('No_Pelanggan')
                  ->references('No_Pelanggan')
                  ->on('pelanggans')
                  ->cascadeOnDelete();
        });
    }

    /**
     * ulang migration.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
