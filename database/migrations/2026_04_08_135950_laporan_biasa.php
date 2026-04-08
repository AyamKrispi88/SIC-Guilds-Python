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
        Schema::create('laporan_biasa', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_laporan', ['Kepadatan Lalu Lintas', 'Kasus Kriminal', 'Orang Hilang']);
            $table->date('tanggal_kejadian');
            $table->string('lokasi_kejadian', 255);
            $table->text('deskripsi_kejadian');
            $table->string('foto_kejadian', 255);
            $table->enum('status_laporan', ['Sudah diproses', 'Masih diproses', 'Belum diproses']);
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_biasa');
    }
};
