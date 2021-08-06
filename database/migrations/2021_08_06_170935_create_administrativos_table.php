<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrativos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Funcionario_id');
            $table->string('Cargo_funcion', 100);
            $table->string('Dependencia_Funcion', 100);
            $table->time('Horario');
            $table->string('telefono', 100);
            $table->string('Superior_Inmediato', 100);
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
        Schema::dropIfExists('administrativos');
    }
}
