<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buronan extends Model
{
    use HasFactory;
    protected $table = 'buronan';
    public function laporan_buronan_masuk() {
    return $this->hasOne(LaporanBuronanMasuk::class, 'buron_id');
    }
}
