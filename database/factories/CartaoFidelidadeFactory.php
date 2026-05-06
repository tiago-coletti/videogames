<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\CartaoFidelidade;
use App\Models\Cliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartaoFidelidade>
 */
class CartaoFidelidadeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'codigo_cartao' => $this->faker->unique()->bothify('CF-#####'),
            'pontos' => $this->faker->numberBetween(0, 1000),
            'data_validade' => $this->faker->dateTimeBetween('now', '+2 years'),
            'cliente_id' => Cliente::factory(),
        ];
    }
}
