<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        down();
        Schema::create('patient_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('helper_id');            
            $table->integer('kohort_number');
            $table->string('kia_book_receive_date',200);
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
        Schema::dropIfExists('patient_registrations');
    }
}
