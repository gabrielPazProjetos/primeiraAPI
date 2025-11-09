<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Executa a migration: cria a tabela 'usuarios'.
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id(); // ID autoincrementável
            $table->string('nome'); // Nome do usuário
            $table->string('email')->unique(); // Email único
            $table->timestamps(); // created_at e updated_at
        });
    }

    /**
     * Reverte a migration: exclui a tabela 'usuarios'.
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
