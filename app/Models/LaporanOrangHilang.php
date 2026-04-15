<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanOrangHilang extends Model
{
    use HasFactory;

    protected $fillable = [
    'jenis_laporan',
    'tanggal_hilang',
    'lokasi_terakhir',
    'nama_lengkap',
    'jenis_kelamin',
    'kewarnanegaraan',
    'tanggal_lahir',
    'tinggi_badan',
    'berat_badan',
    'keterangan',
    'foto_orang_hilang',
    'user_id',
];

    protected $table = 'laporan_orang_hilang';
    public function user() {
    return $this->belongsTo(User::class, 'user_id');
    }
}
