<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Plataforma;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Plataforma>
 */
class PlataformaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->word(),
            'fabricante' => $this->faker->company(),
            'ano_lancamento' => $this->faker->numberBetween(1980, 2026),
            'tipo' => $this->faker->randomElement(['Console', 'PC', 'Handheld', 'Mobile']),
            'preco_lancamento' => $this->faker->randomFloat(2, 199, 599),
        ];
    }
}
