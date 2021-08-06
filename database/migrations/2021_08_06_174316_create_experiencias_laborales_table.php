<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperienciasLaboralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiencias_laborales', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Funcionario_Id')->unsigned;
            $table->string('Cargo', 100);
            $table->string('Entidad', 100);
            $table->string('TiempoTrabajado', 100);
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
        Schema::dropIfExists('experiencias_laborales');
    }
}
