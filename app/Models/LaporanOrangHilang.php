<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanOrangHilang extends Model
{
    use HasFactory;
    protected $table = 'laporan_orang_hilang';
    public function user() {
    return $this->belongsTo(User::class, 'user_id');
    }
}
