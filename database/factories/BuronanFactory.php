<?php

namespace Database\Factories;

use App\Models\Buronan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Buronan>
 */
class BuronanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kejahatan' => $this->faker->word(),
            'nama_lengkap' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['Laki-laki', 'Perempuan']),
            'lokasi_terakhir' => $this->faker->address(),
            'terakhir_dilihat' => $this->faker->date(),
            'kewarnanegaraan' => $this->faker->country(),
            'keterangan' => $this->faker->sentence(),
            'deskripsi_sifat' => $this->faker->paragraph(),
            'foto_buronan' => $this->faker->imageUrl(640, 480),
            'status_buronan' => $this->faker->randomElement(['Sudah Ditemukan', 'Belum Ditemukan']),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
