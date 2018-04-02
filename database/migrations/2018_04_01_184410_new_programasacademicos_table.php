<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NewProgramasacademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programasacademicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('programa');
            $table->integer('sede_id')->unsigned()->nullable();
            $table->foreign('sede_id')->references('id')->on('sedesuniversitarias');
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
        Schema::dropIfExists('programasacademicos');
    }
}
