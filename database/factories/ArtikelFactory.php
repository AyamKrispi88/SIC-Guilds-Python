<?php

namespace Database\Factories;

use App\Models\Artikel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' => $this->faker->sentence(),
            'gambar_artikel' => $this->faker->imageUrl(640, 480),
            'deskripsi' => $this->faker->paragraph(),
            'link' => $this->faker->url(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
