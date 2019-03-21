<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DiseasesHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('diseases_histories');
        Schema::create('diseases_histories', function (Blueprint $table) {
            $table->increments('id_diseases_histories');
            $table->integer('id_patients')->unsigned();
            $table->string('name',200);
            $table->string('description',200);
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
