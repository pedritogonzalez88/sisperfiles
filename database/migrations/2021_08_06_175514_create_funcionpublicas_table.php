<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionpublicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionpublicas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Funcionario_id')->unsigned;
            $table->string('Nombre', 100);
            $table->string('Apellido', 100);
            $table->string('Cedula', 10);
            $table->string('Entidad', 100);
            $table->string('Cargo', 100);
            $table->timestamps();
            $table->foreign('Funcionario_id')->references('id')->on('Funcionarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionpublicas');
    }
}
