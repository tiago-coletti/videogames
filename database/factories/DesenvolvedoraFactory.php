<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Desenvolvedora;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Desenvolvedora>
 */
class DesenvolvedoraFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nome' => $this->faker->company(),
            'pais' => $this->faker->country(),
            'ano_fundacao' => $this->faker->numberBetween(1970, 2026),
            'site_oficial' => $this->faker->url(),
            'numero_funcionarios' => $this->faker->numberBetween(10, 5000),
        ];
    }
}
