<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $fillable = [
    'judul',
    'gambar_artikel',
    'deskripsi',
    'link',
    'user_id',
];

    protected $table = 'artikel';
    public function user(){
            return $this->belongsTo(User::class,'user_id' );
    }
}
