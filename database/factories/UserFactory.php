<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName(),
            'role' => false,
            'nama_lengkap' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'tempat_tanggal_lahir' => $this->faker->date(),
            'password' => static::$password ??= Hash::make('password'),
            'NIK' => $this->faker->unique()->numerify('################'),
            'foto_profil' => $this->faker->optional()->imageUrl(200, 200, 'people'),
            'remember_token' => Str::random(10),
        ];
    }
}