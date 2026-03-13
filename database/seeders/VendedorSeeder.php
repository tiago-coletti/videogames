<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vendedor;

class VendedorSeeder extends Seeder
{
    public function run(): void
    {
        Vendedor::factory()->count(3)->create();
    }
}