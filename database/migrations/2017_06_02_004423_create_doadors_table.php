<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doadores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cpf',11)->unique();
            $table->date('nascimento');
            $table->char('sexo',1);
            $table->string('nacionalidade');
            $table->string('grupo_sanguineo');
            $table->string('raca');
            $table->string('nome_mae');
            $table->string('cep');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('uf');
            $table->string('trabalho_atual');
            $table->string('form_profissional');
            $table->string('email');
            $table->string('contato');
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doadores');
    }
}
