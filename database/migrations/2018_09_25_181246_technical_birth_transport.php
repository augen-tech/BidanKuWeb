<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TechnicalBirthTransport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('technical_birth_transport');
        Schema::create('technical_birth_transport', function (Blueprint $table) {
            $table->increments('id_technical_birth_transport');
            $table->integer('id_technical_births')->unsigned();
            $table->integer('id_transport')->unsigned();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
