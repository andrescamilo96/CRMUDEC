<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIndrtasolicitud extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('solicitudes', function($table) {
            $table->boolean('indrespuesta')->nullable();
            $table->text('solicitudrespuesta')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitudes', function ($table) {
            $table->dropColumn('indrespuesta');
            $table->dropColumn('solicitudrespuesta');
        });
    }
}

