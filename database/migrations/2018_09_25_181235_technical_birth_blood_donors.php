<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TechnicalBirthBloodDonors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('technical_birth_blood_donors');
        Schema::create('technical_birth_blood_donors', function (Blueprint $table) {
            $table->increments('id_technical_birth_blood_donors');
            $table->integer('id_technical_birth')->unsigned();
            $table->integer('id_blood_donor')->unsigned();

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
