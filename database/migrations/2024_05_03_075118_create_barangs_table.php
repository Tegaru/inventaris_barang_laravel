<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// Menggunakan anonymous class untuk membuat migration baru
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Membuat tabel 'barangs'
        Schema::create('barangs', function (Blueprint $table) {
            // Menambahkan kolom ID dengan tipe big integer dan increment
            $table->bigIncrements('id');
            // Menambahkan kolom 'nama_barang' dengan tipe string dan panjang maksimum 64 karakter
            $table->string('nama_barang', 64);
            // Menambahkan kolom 'jenis_barang' dengan tipe string dan panjang maksimum 64 karakter
            $table->string('jenis_barang', 64);
            // Menambahkan kolom 'satuan' dengan tipe string dan panjang maksimum 16 karakter
            $table->string('satuan', 16);
            // Menambahkan kolom 'jumlah' dengan tipe integer
            $table->integer('jumlah');
            // Menambahkan kolom 'created_at' dan 'updated_at' untuk timestamp
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Menghapus tabel 'barangs'
        Schema::dropIfExists('barangs');
    }
};
