<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('funcionarios', function (Blueprint $table) {
            $table->unsignedBigInteger('ciudad_id');
            $table->unsignedBigInteger('barrio_id');
            $table->unsignedBigInteger('pais_id');
            $table->unsignedBigInteger('departamento_id');
            $table->foreign('ciudad_id')
                ->references('id')
                ->on('ciudades');
            $table->foreign('barrio_id')
                ->references('id')
                ->on('barrios');
            $table->foreign('pais_id')
                ->references('id')
                ->on('paises');
            $table->foreign('departamento_id')
                ->references('id')
                ->on('departamentos');
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
            $table->dropForeign('funcionarios_ciudades_id_foreign');
            $table->dropForeign('funcionarios_barrios_id_foreign');
            $table->dropForeign('funcionarios_departamentos_id_foreign');
            $table->dropForeign('funcionarios_paises_id_foreign');
        });
    }
}
