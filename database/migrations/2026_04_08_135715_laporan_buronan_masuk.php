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
        Schema::create('laporan_buronan_masuk', function (Blueprint $table) {
            $table->id();
            $table->enum('status_laporan', ['diterima', 'ditolak']);
            $table->date('tanggal_menemukan');
            $table->string('tempat_menemukan', 255);
            $table->text('keterangan');
            // $table->foreignId('buron_id')->constrained('buronan');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_buronan_masuk');
    }
};
