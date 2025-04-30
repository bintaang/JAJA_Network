<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TSmk>
 */
class TSmkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'NISN' => $this->faker->unique()->numerify('##########'),
            'NamaSiswa' => $this->faker->name(),
            'Jurusan' => $this->faker->randomElement(['RPL', 'TKJ', 'DKV', 'TKTL', 'TAV', 'TOI']),
            'Gedung' => $this->faker->randomElement(['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O']),
            'Kelas' => $this->faker->randomElement(['X', 'XI', 'XII']),
            'WaliKelas' => $this->faker->randomElement(['Hana', 'Ilham','Gerald']),
        ];
    }
}
