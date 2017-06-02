<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpedimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impedimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->char('tipo');//T. temporário | D. Definitivo
            $table->string('descricao');
            $table->char('status')->default('1');
            $table->timestamps();
        });

        DB::table('impedimentos')->insert(
            array(
                'tipo' => 'T',
                'descricao' => 'Esta bem de saúde? Se estiver gripado, resfriado, com febre, espere 7 dias após o desaparecimento dos sintomas',
                'status' => true
            ),
            array(
                'tipo' => 'D',
                'descricao' => 'Hepatite após os 10 anos de idade',
                'status' => true
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('impedimentos');
    }
}
