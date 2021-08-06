<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConyugesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conyuges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Funcionario_Id')->unsigned;
            $table->string('Nombre',60);
            $table->string('Apellido',60);
            $table->integer('Cedula')->unsigned;
            $table->string('Sexo',60);
            $table->string('Telefono',20);
            $table->string('Celular',20);
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
        Schema::dropIfExists('conyuges');
    }
}
