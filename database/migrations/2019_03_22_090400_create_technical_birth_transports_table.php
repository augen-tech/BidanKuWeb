<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalBirthTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        down();
        Schema::create('technical_birth_transports', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('technical_birth_id')->unsigned();
            $table->integer('transport_id')->unsigned();
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
        Schema::dropIfExists('technical_birth_transports');
    }
}
