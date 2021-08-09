<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionarioFuncionPublica extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario_funcion_publica', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('funcionario_id');
            $table->unsignedBigInteger('funcion_publica_id');
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
        Schema::dropIfExists('funcionario_funcion_publica');
    }
}
