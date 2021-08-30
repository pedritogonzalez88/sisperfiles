<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFuncionariosLugares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->string('pais',200);
            $table->string('ciudad',200);
            $table->string('departamento',200);
            $table->string('barrios',200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->dropColumn('pais');
            $table->dropColumn('ciudad');
            $table->dropColumn('departamento');
            $table->dropColumn('barrios');
        });
    }
}
