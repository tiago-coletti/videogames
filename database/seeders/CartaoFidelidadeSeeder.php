<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CartaoFidelidade;

class CartaoFidelidadeSeeder extends Seeder
{
    public function run(): void
    {
        CartaoFidelidade::factory()->count(10)->create();
    }
}
