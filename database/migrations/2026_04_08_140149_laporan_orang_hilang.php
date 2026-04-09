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
        Schema::create('laporan_orang_hilang', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_laporan', ['Kepadatan Lalu Lintas', 'Kasus Kriminal', 'Orang Hilang']);
            $table->date('tanggal_hilang');
            $table->string('lokasi_terakhir', 255);
            $table->string('nama_lengkap', 255);
            $table->string('jenis_kelamin', 50);
            $table->string('kewarnanegaraan', 50);
            $table->string('tanggal_lahir', 50);
            $table->string('tinggi_badan', 20);
            $table->string('berat_badan', 20);
            $table->text('keterangan');
            $table->string('foto_orang_hilang', 255);
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
        Schema::dropIfExists('laporan_orang_hilang');
    }
};
