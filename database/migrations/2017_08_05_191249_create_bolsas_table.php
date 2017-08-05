<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBolsasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bolsas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('doador_id');
            $table->integer('tecnico_id');
            $table->integer('laboratorio_id');
            $table->integer('tipo');
            $table->integer('fator_rh');
            $table->integer('bolsa_origem_id');
            $table->string('status');
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
        Schema::dropIfExists('bolsas');
    }
}
