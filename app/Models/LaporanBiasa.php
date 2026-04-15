<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanBiasa extends Model
{
    use HasFactory;

    protected $fillable = [
    'jenis_laporan',
    'tanggal_kejadian',
    'lokasi_kejadian',
    'deskripsi_kejadian',
    'foto_kejadian',
    'user_id',
];

    protected $table = 'laporan_biasa';
    public function user() {
    return $this->belongsTo(User::class, 'user_id');
    }

}
