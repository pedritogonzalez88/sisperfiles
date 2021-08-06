<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoMedicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_medicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Funcionarios_Id')->unsigned;
            $table->string('GrupoSanguineo', 20);
            $table->string('Enfermedad', 100);
            $table->string('NombreSeguro', 100);
            $table->bigInteger('NroCarnet')->unsigned;
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
        Schema::dropIfExists('info_medicas');
    }
}
