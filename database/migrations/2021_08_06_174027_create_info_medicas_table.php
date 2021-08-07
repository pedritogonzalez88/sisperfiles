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
            $table->string('GrupoSanguineo', 20);
            $table->string('Enfermedad', 100);
            $table->string('NombreSeguro', 100);
            $table->unsignedInteger('NroCarnet');
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
        Schema::dropIfExists('info_medicas');
    }
}
