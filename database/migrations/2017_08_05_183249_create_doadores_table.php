<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoadoresTable extends Migration
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
            $table->integer('user_id');
            $table->string('endereco',240);
            $table->string('nascimento');
            $table->string('ja_e_doador')->default('N');
            $table->string('sexo');
            $table->string('documento')->default('-');
            $table->string('contato',240);
            $table->boolean('status')->default(1);
            $table->boolean('aptidao')->default(1); //apto = 1 , inapto = 0
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
