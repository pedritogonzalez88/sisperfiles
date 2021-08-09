<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudioRealizadoFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudio_realizado_funcionario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('estudio_realizado_id');
            $table->unsignedBigInteger('funcionario_id');
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
        Schema::dropIfExists('estudio_realizado_funcionario');
    }
}
