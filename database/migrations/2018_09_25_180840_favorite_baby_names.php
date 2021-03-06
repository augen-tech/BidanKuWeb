<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FavoriteBabyNames extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('favorite_baby_names');
        Schema::create('favorite_baby_names', function (Blueprint $table) {
            $table->increments('id_favorite_baby_names');
            $table->integer('id_patients')->unsigned();
            $table->integer('id_baby_names')->unsigned();

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
