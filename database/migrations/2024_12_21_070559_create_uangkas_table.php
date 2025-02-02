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
        // Membuat tabel uangkas
        Schema::create('uangkas', function (Blueprint $table) {
            $table->id();  // kolom id utama (primary key)
            $table->string('nama_siswa');  // kolom untuk nama siswa
            $table->date('tgl_bayar');  // kolom untuk tanggal pembayaran
            $table->integer('jumlah_bayar');  // kolom untuk jumlah pembayaran
            $table->timestamps(); // kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('uangkas');  // menghapus tabel uangkas jika migrasi dibatalkan
    }
};


