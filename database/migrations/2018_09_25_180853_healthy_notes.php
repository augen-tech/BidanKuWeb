<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HealthyNotes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('healthy_notes');
        Schema::create('healthy_notes', function (Blueprint $table) {
            $table->increments('id_healthy_notes');
            $table->integer('id_pregnancy_info')->unsigned();
            $table->string('checkup_date',200);
            $table->string('complaint',200);
            $table->string('blood_pressure',200);
            $table->string('body_weight',200);
            $table->string('pregnancy_age',200);
            $table->string('fundus_height',200);
            $table->string('fetus_position',200);
            $table->string('fetus_pulse',200);
            $table->string('heart_pulse',200);
            $table->string('swollen_foot',200);
            $table->string('lab_result',200);
            $table->string('action',200);
            $table->string('advice',200);
            $table->string('checkup_location',200);
            $table->string('recheckup_date',200);

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
