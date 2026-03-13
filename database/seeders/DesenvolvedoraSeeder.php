<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Desenvolvedora;

class DesenvolvedoraSeeder extends Seeder
{
    public function run(): void
    {
        Desenvolvedora::factory()->count(5)->create();
    }
}