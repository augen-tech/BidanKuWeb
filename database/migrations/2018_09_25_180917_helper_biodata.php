<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HelperBiodata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('helper_biodata');
        Schema::create('helper_biodata', function (Blueprint $table) {
            $table->increments('id_helper_biodata');
            $table->integer('id_helper')->unsigned();
            $table->string('name',200);
            $table->string('birth_date',200);
            $table->string('birth_place',200);

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
