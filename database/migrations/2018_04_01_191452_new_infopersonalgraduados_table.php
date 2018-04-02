<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewInfopersonalgraduadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informaciongraduados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('telefono',50);
            $table->integer('anograduacion');
            $table->integer('semestregraduacion');
            $table->string('residencia',50);
            $table->string('estadocivil',50);
            $table->integer('estrato');
            $table->string('sexo',10);
            
            $table->text('descripcionperfil');
            //referencia usuario(graduado)
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            //referencia programa
            $table->integer('programa_id')->unsigned()->nullable();
            $table->foreign('programa_id')->references('id')->on('programasacademicos');
            //referencia ciudad residencia
            $table->integer('ciudadresidencia_id')->unsigned()->nullable();
            $table->foreign('ciudadresidencia_id')->references('id')->on('ciudades');







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
        Schema::dropIfExists('infopersonalgraduados');
    }
}
