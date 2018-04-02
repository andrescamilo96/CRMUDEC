<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewInfoempleadoudecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infoempleadosudec', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('codigocarnet',50);
            $table->string('telefono',50);
            $table->string('adjuntocarnet',50);
            $table->string('email',50);
            $table->string('cargo',50);
            $table->integer('usuario_id')->unsigned()->nullable();
            $table->foreign('usuario_id')->references('id')->on('users');


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
        Schema::dropIfExists('infoempleadosudec');
    }
}
