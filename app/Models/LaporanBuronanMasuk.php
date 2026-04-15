<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanBuronanMasuk extends Model
{
    use HasFactory;

    protected $fillable = [
    'tanggal_menemukan',
    'tempat_menemukan',
    'keterangan',
    'buron_id',
    'user_id',
];

    protected $table = 'laporan_buronan_masuk';
    public function user() {
    return $this->belongsTo(User::class, 'user_id');
    }

    public function buronan() {
    return $this->hasOne(Buronan::class, 'user_id');
    }
}
