<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiosRealizadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudios_realizados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Institucion', 100);
            $table->date('FechaInicio');
            $table->date('FechaFin');
            $table->string('Titulo', 100);
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
        Schema::dropIfExists('estudios_realizados');
    }
}
