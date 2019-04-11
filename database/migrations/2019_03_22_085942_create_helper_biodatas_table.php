<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelperBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('helper_biodatas');
        Schema::create('helper_biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('helper_id');
            $table->string('name',200);
            $table->date('birth_date');
            $table->string('birth_place',200);
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
        Schema::dropIfExists('helper_biodatas');
    }
}
