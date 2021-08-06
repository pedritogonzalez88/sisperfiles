<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('familiares', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('Funcionario_id')->unsigned;
            $table->string('Nombre',60);
            $table->string('Apellido',60);
            $table->string('TipoFamiliar');
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
        Schema::dropIfExists('familiares');
    }
}
