<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewNotificacionesTabble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->text('notificacion');

            $table->integer('usuarioremite_id')->unsigned()->nullable();
            $table->foreign('usuarioremite_id')->references('id')->on('users');


            $table->integer('usuariorecibe_id')->unsigned()->nullable();
            $table->foreign('usuariorecibe_id')->references('id')->on('users');

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
        Schema::dropIfExists('notificaciones');
    }
}
