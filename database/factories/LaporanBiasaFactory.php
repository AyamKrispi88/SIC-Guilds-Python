<?php

namespace Database\Factories;

use App\Models\LaporanBiasa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LaporanBiasa>
 */
class LaporanBiasaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'jenis_laporan' => $this->faker->randomElement(['Kepadatan Lalu Lintas', 'Kasus Kriminal']),
            'tanggal_kejadian' => $this->faker->date(),
            'lokasi_kejadian' => $this->faker->address(),
            'deskripsi_kejadian' => $this->faker->paragraph(),
            'foto_kejadian' => $this->faker->imageUrl(),
            'status_laporan' => $this->faker->randomElement(['Sudah diproses', 'Masih diproses', 'Belum diproses']),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
