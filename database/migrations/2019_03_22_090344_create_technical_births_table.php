<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalBirthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('technical_births');
        Schema::create('technical_births', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('first_birth_helper_id')->unsigned();
            $table->integer('second_birth_helper_id')->unsigned();
            $table->string('birth_funding',200);
            $table->string('after_birth_contraception_method',200);
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
        Schema::dropIfExists('technical_births');
    }
}
