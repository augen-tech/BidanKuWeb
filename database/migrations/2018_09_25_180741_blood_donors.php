<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BloodDonors extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('blood_donors');
        Schema::create('blood_donors', function (Blueprint $table) {
            $table->increments('id_blood_donors');
            $table->string('name',200);
            $table->string('blood_type',200);
            $table->string('phone_number',200);
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
