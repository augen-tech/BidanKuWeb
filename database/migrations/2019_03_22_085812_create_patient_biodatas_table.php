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
        down();
        Schema::create('patient_biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->unsigned();
            $table->integer('blood_type_id')->unsigned();
            $table->string('name',200);
            $table->string('birth_date',200);
            $table->string('birth_place',200);
            $table->string('pregnancy_count',200);
            $table->string('labor_count',200)->default("");
            $table->string('miscarriage_count',200)->default("");
            $table->string('premature_child_count',200)->default("");
            $table->string('born_died_count',200)->default("");
            $table->string('life_child_count',200);
            $table->string('last_child_age',200);
            $table->string('education',200);
            $table->string('religion',200);
            $table->string('occupation',200);
            $table->string('jkn_number',200);
            $table->string('address',200);
            $table->string('sub_district',200);
            $table->string('district',200);
            $table->string('family_phone_number',200)->default("");
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
