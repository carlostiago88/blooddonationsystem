<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacoes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doador_id')->unsigned();
            $table->float('peso');
            $table->float('altura');
            $table->boolean('status')->default('1'); //1.Não realizado | 2. Realizado | 3. Realizado e Avaliado
            $table->date('data_agendamento');
            $table->date('data_doacao');
            $table->integer('laboratorio_id');
            $table->string('avaliacao');
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
        Schema::dropIfExists('doacoes');
    }
}
