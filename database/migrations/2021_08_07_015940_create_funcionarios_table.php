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
            $table->unsignedInteger('Cedula');
            $table->string('Nombre',60);
            $table->string('Apellido',60);
            $table->string('Sexo',60);
            $table->string('Pasaporte',60);
            $table->string('Registro',60);
            $table->string('Categoria',60);
            $table->string('RUC');
            $table->string('ImagenURL');
            $table->string('telefono',20);
            $table->date('fechaNacimiento');
            $table->string('Direccion',160);
            $table->string('correo',100);
            $table->string('TipoFuncionario');
            $table->string('EstadoCivil',60);
            $table->string('EmailParticular',100);
            $table->string('Celular',15);
            $table->string('Situacion_Laboral',100);
            $table->string('vivienda',60);
            $table->text('Observaciones');
            $table->boolean('Activo');
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
        Schema::dropIfExists('funcionarios');
    }
}
