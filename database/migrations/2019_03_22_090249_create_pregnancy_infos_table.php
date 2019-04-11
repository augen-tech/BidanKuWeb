<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePregnancyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('pregnancy_infos');
        Schema::create('pregnancy_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->date('last_menstruation_date');
            $table->date('estimated_birth_date');
            $table->integer('upper_arm_circumference');
            $table->string('KEK',200);
            $table->integer('body_height');
            $table->string('contraception_method',200);
            $table->date('last_pregnancy_date');
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
        Schema::dropIfExists('pregnancy_infos');
    }
}
