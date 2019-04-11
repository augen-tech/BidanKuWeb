<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHealtyNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('healty_notes');
        Schema::create('healty_notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pregnancy_info_id');
            $table->date('checkup_date');
            $table->string('complaint',200);
            $table->integer('blood_pressure');
            $table->integer('body_weight');
            $table->integer('pregnancy_age');
            $table->integer('fundus_height');
            $table->string('fetus_position',200);
            $table->integer('fetus_pulse');
            $table->integer('heart_pulse');
            $table->string('swollen_foot',200);
            $table->string('lab_result',200);
            $table->string('action',200);
            $table->string('advice',200);
            $table->string('checkup_location',200);
            $table->date('recheckup_date');
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
        Schema::dropIfExists('healty_notes');
    }
}
