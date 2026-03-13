<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jogo;

class JogoSeeder extends Seeder
{
    public function run(): void
    {
        Jogo::factory()->count(15)->create();
    }
}