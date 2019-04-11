<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTechnicalBirthBloodDonorsTable extends Migration
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
            $table->increments('id');
            $table->integer('technical_birth_id');
            $table->integer('blood_donor_id');
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
        Schema::dropIfExists('technical_birth_blood_donors');
    }
}
