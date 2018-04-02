<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewCurriculumlaboralTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historialeslaboral', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cargo',50);
            $table->string('descripcion',200);
            $table->string('empresa',50);
            $table->integer('anoslaborados');
            $table->string('rangoingresos',50);
            $table->string('direccionempresa',50);
            $table->string('adjuntosoporte',50);
            $table->integer('telefonoempresa')->nullable();
            $table->integer('usuario_id')->unsigned()->nullable();
            $table->foreign('usuario_id')->references('id')->on('users');
            //ciudad
            $table->integer('ciudadempresa_id')->unsigned()->nullable();
            $table->foreign('ciudadempresa_id')->references('id')->on('ciudades');

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
        Schema::dropIfExists('historialeslaboral');
    }
}
