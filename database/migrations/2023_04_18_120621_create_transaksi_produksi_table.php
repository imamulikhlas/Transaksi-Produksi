<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi_produksi', function (Blueprint $table) {
            $table->id();
            $table->string('npk', 5);
            $table->dateTime('tanggal_transaksi');
            $table->string('kode_lokasi', 4);
            $table->string('kode_item', 4);
            $table->integer('qty_actual');

            $table->timestamps();

            $table->foreign('npk')->references('npk')->on('karyawan')->nullable()->onDelete('cascade');
            $table->foreign('kode_lokasi')->references('kode_lokasi')->on('lokasi')->nullable()->onDelete('cascade');
            $table->foreign('kode_item')->references('kode_item')->on('item')->nullable()->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi_produksi');
    }
};
