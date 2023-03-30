<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // ESSA FUNÇÃO DEFINE A FUNCIONALIDADE PARA CRIAR A TABLE
    {
        Schema::create('categorias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps(); // CRIA 2 COLUNAS - UMA PARA DATA CRIADA e outra para A HORA CRIADA
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // ESSA FUNÇÃO DEFINE A FUNCIONALIDADE PARA DESFAZER A TABLE
    {
        Schema::dropIfExists('categorias');
    }
};
