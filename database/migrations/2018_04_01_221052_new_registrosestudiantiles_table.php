<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewRegistrosestudiantilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrosestudiantiles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo',200);          
            $table->integer('anofinalizacion')->nullable();
            $table->string('institucion',50);
            $table->string('adjuntosoporte',200);
            $table->string('certificadoconvalidacion',200)->nullable();

            $table->integer('usuario_id')->unsigned()->nullable();
            $table->foreign('usuario_id')->references('id')->on('users');

            $table->integer('tipoestudio_id')->unsigned()->nullable();
            $table->foreign('tipoestudio_id')->references('id')->on('tipoestudios');


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
        Schema::dropIfExists('registrosestudiantiles');
    }
}
