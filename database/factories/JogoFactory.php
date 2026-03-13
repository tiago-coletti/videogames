<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Jogo;
use App\Models\Plataforma;
use App\Models\Desenvolvedora;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jogo>
 */
class JogoFactory extends Factory
{
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'preco' => $this->faker->randomFloat(2, 20, 350),
            'data_lancamento' => $this->faker->date(),
            'plataforma_id' => (Plataforma::all()->random())->id,
            'desenvolvedora_id' => (Desenvolvedora::all()->random())->id,
        ];
    }
}