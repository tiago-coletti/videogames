<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Vendedor;
use App\Models\Jogo;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venda>
 */
class VendaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'cliente_id' => (Cliente::all()->random())->id,
            'vendedor_id' => (Vendedor::all()->random())->id,
            'jogo_id' => (Jogo::all()->random())->id,
            'data_venda' => $this->faker->dateTimeThisYear(),
            'valor_total' => $this->faker->randomFloat(2, 50, 1000),
        ];
    }
}