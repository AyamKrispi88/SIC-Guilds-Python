<?php

namespace Database\Factories;

use App\Models\LaporanOrangHilang;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LaporanOrangHilang>
 */
class LaporanOrangHilangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis_laporan' => $this->faker->randomElement(['Orang Hilang']),
            'tanggal_hilang' => $this->faker->date(),
            'lokasi_terakhir' => $this->faker->address(),
            'nama_lengkap' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'kewarnanegaraan' => $this->faker->country(),
            'tanggal_lahir' => $this->faker->date(),
            'tinggi_badan' => $this->faker->numberBetween(100, 195),
            'berat_badan'  => $this->faker->numberBetween(45, 110),
            'keterangan' => $this->faker->paragraph(),
            'foto_orang_hilang' => $this->faker->imageUrl(640, 480, 'people', true),
            'status_laporan' => $this->faker->randomElement(['Sudah diproses', 'Masih diproses', 'Belum diproses']),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
