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
        Schema::create('buronan', function (Blueprint $table) {
            $table->id();
            $table->string('kejahatan', 255);
            $table->string('nama_lengkap', 255);
            $table->string('jenis_kelamin', 255);
            $table->string('lokasi_terakhir', 255);
            $table->string('terakhir_dilihat', 50);
            $table->string('kewarnanegaraan', 50);
            $table->text('keterangan');
            $table->text('deskripsi_sifat');
            $table->string('foto_buronan', 255);
            $table->enum('status_buronan', ['Sudah Ditemukan', 'Belum Ditemukan']);
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buronan');
    }
};
