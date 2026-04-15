<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'username',
        'nama_lengkap',
        'email',
        'tempat_tanggal_lahir',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function Artikel() {
    return $this->hasMany(Artikel::class, 'user_id');
    }

    public function laporan_biasa() {
    return $this->hasMany(LaporanBiasa::class, 'user_id');
    }

    public function laporan_orang_hilang() {
    return $this->hasMany(LaporanOrangHilang::class, 'user_id');
    }

    public function laporan_buronan_masuk() {
    return $this->hasMany(LaporanBuronanMasuk::class, 'user_id');
    }

}

