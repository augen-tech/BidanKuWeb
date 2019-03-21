<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BabyNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('baby_names');
        Schema::create('baby_names', function (Blueprint $table) {
            $table->increments('id_baby_names');
            $table->integer('id_patients')->unsigned();
            $table->string('baby_names_name',200);
            $table->string('baby_names_gender',200);
            $table->string('baby_names_meaning',200);
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
