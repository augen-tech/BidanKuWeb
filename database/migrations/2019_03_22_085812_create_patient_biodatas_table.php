<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('patient_biodatas');
        Schema::create('patient_biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('blood_type_id')->unsigned();
            $table->string('name',200);
            $table->date('birth_date');
            $table->string('birth_place',200);
            $table->integer('pregnancy_count');
            $table->integer('labor_count');
            $table->integer('miscarriage_count');
            $table->integer('premature_child_count');
            $table->integer('born_died_count');
            $table->integer('life_child_count');
            $table->integer('last_child_age');
            $table->string('education',200);
            $table->string('religion',200);
            $table->string('occupation',200);
            $table->integer('jkn_number');
            $table->integer('address');
            $table->string('sub_district',200);
            $table->string('district',200);
            $table->integer('family_phone_number');
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
        Schema::dropIfExists('patient_biodatas');
    }
}
