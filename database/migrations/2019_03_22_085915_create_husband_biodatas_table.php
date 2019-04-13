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
        Schema::dropIfExists('husband_biodatas');
        Schema::create('husband_biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('husband_id');
            $table->string('name',200)->nullable();
            $table->date('birth_date')->nullable();
            $table->string('birth_place',200)->nullable();
            $table->integer('blood_type_id')->nullable();
            $table->string('education',200)->nullable();
            $table->string('religion',200)->nullable();
            $table->string('occupation',200)->nullable();
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
