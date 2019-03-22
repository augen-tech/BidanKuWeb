<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHusbandBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        down();
        Schema::create('husband_biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('husband_id')->unsigned();
            $table->string('name',200);
            $table->string('birth_date',200);
            $table->string('birth_place',200);
            $table->string('blood_type_id',200);
            $table->string('education',200);
            $table->string('religion',200);
            $table->string('occupation',200)->default("");
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
        Schema::dropIfExists('husband_biodatas');
    }
}
