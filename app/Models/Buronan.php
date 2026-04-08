<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buronan extends Model
{
    public function laporan_buronan_masuk() {
    return $this->hasOne(LaporanBuronanMasuk::class, 'buron_id');
    }
}
