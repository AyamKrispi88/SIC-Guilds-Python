<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buronan extends Model
{
    use HasFactory;

    protected $fillable = [
        'kejahatan',
        'nama_lengkap',
        'jenis_kelamin',
        'lokasi_terakhir',
        'terakhir_dilihat',
        'kewarnanegaraan',
        'keterangan',
        'deskripsi_sifat',
        'foto_buronan',
        'status_buronan',
        'user_id',
    ];

    protected $table = 'buronan';
    public function laporan_buronan_masuk() {
    return $this->hasOne(LaporanBuronanMasuk::class, 'buron_id');
    }
}
