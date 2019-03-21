<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PregnancyInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('pregnancy_info');
        Schema::create('pregnancy_info', function (Blueprint $table) {
            $table->increments('id_pregnancy_info');
            $table->integer('id_patients')->unsigned();
            $table->string('last_menstruation_date',200);
            $table->string('estimated_birth_date',200);
            $table->string('upper_arm_circumference',200);
            $table->string('KEK',200);
            $table->string('body_height',200);
            $table->string('contraception_method',200);
            $table->string('last_pregnancy_date',200);

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
