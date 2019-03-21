<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AllergyHistories extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('allergy_histories');
        Schema::create('allergy_histories', function (Blueprint $table) {
            $table->increments('id_allergy_histories');
            $table->integer('id_patients')->unsigned();
            $table->string('name',200);
            $table->string('description',200);
        });
//            $table->foreign('id_patients')
//                ->references('id_patients')->on('patients')
//                ->onDelete('cascade');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('allergy_histories');
    }
}
