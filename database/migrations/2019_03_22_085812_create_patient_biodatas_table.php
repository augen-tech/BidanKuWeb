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
            $table->string('name',200)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place',200)->nullable();
            $table->integer('pregnancy_count')->nullable();
            $table->integer('labor_count')->nullable();
            $table->integer('miscarriage_count')->nullable();
            $table->integer('premature_child_count')->nullable();
            $table->integer('born_died_count')->nullable();
            $table->integer('life_child_count')->nullable();
            $table->integer('last_child_age')->nullable();
            $table->string('education',200)->nullable();
            $table->string('religion',200)->nullable();
            $table->string('occupation',200)->nullable();
            $table->integer('jkn_number')->nullable();
            $table->integer('address')->nullable();
            $table->string('sub_district',200)->nullable();
            $table->string('district',200)->nullable();
            $table->integer('family_phone_number')->nullable();
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
