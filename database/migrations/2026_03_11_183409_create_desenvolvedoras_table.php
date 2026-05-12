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
        Schema::create('desenvolvedoras', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('pais', 80);
            $table->integer('ano_fundacao');
            $table->string('site_oficial', 150)->nullable();
            $table->integer('numero_funcionarios')->default(0);
            $table->string('imagem', 255)->nullable(); // Adicione isso aqui
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desenvolvedoras');
    }
};
