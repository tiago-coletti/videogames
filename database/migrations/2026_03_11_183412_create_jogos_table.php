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
        Schema::create('jogos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 150);
            $table->decimal('preco', 8, 2);
            $table->date('data_lancamento');
            
            $table->foreignId('plataforma_id')->constrained('plataformas')->onDelete('cascade');
            $table->foreignId('desenvolvedora_id')->constrained('desenvolvedoras')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jogos');
    }
};