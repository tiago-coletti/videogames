<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cartao_fidelidades', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_cartao', 20)->unique();
            $table->integer('pontos')->default(0);
            $table->date('data_validade');
            $table->foreignId('cliente_id')->unique()->constrained('clientes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartao_fidelidades');
    }
};
