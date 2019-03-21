<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HusbandsBiodata extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('husbands_biodata');
        Schema::create('husbands_biodata', function (Blueprint $table) {
            $table->increments('id_husbands_biodata');
            $table->integer('id_husbands')->unsigned();
            $table->string('name_husbands',200);
            $table->string('birth_date_husbands',200);
            $table->string('birth_place_husbands',200);
            $table->string('blood_type_id_husbands',200);
            $table->string('education_husbands',200);
            $table->string('religion_husbands',200);
            $table->string('occupation_husbands',200)->default("");

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
