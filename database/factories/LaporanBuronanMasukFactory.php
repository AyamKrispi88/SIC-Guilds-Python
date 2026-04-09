<?php

namespace Database\Factories;

use App\Models\LaporanBuronanMasuk;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<LaporanBuronanMasuk>
 */
class LaporanBuronanMasukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status_laporan' => $this->faker->randomElement(['diterima', 'ditolak']),
            'tanggal_menemukan' => $this->faker->date(),
            'tempat_menemukan' => $this->faker->address(),
            'keterangan' => $this->faker->paragraph(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
