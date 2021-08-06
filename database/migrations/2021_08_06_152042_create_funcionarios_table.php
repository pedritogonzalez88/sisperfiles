<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('Cedula')->unsigned;
            $table->string('Nombre',60);
            $table->string('Apellido',60);
            $table->string('ImagenURL');
            $table->string('telefono',20);
            $table->date('fechaNacimiento');
            $table->string('Direccion',160);
            $table->string('correo',100);
            $table->string('TipoFuncionario');
            $table->string('EstadoCivil',60);
            $table->string('EmailParticular',100);
            $table->text('Observaciones');
            $table->boolean('Activo');
            $table->bigInteger('Ciudad_Id')->unsigned;
            $table->bigInteger('Barrio_Id')->unsigned;
            $table->bigInteger('Pais_Id')->unsigned;
            $table->bigInteger('Departamento_Id')->unsigned;
            $table->timestamps();
            $table->foreign('Ciudad_Id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->foreign('Barrio_Id')->references('id')->on('barrios')->onDelete('cascade');
            $table->foreign('Pais_Id')->references('id')->on('paises')->onDelete('cascade');
            $table->foreign('Departamento_Id')->references('id')->on('departamentos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
