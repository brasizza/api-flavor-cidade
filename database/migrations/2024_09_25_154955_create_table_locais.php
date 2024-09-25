<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('locais', function (Blueprint $table) {
            $table->id(); // ID automático
            $table->string('cidade', 2); // RJ, SP, etc.
            $table->string('local'); // Nome do local
            $table->text('descricao'); // Descrição do local
            $table->string('endereco'); // Endereço do local
            $table->string('imagem'); // Caminho da imagem
            $table->timestamps(); // Criado em, atualizado em
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locais');
    }
};
