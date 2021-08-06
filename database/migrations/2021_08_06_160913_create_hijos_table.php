<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Funcionario_Id')->unsigned;
            $table->string('Nombre',60);
            $table->string('Apellido',60);
            $table->integer('Cedula')->unsigned;
            $table->date('FechaNacimiento');
            $table->integer('CantidadHijos')->unsigned;
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
        Schema::dropIfExists('hijos');
    }
}
