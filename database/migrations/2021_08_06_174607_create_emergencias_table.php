<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmergenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emergencias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Funcionario_Id')->unsigned;
            $table->string('Nombre', 100);
            $table->string('Apellido', 100);
            $table->string('Telefono', 20);
            $table->string('Celular', 20);
            $table->timestamps();
            $table->foreign('Funcionario_Id')->references('id')->on('Funcionarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('emergencias');
    }
}
