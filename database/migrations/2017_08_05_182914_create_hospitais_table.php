<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHospitaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('telefone');
            $table->string('email');
            $table->string('endereco');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->boolean('status',1);
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
        Schema::dropIfExists('hospitais');
    }
}
