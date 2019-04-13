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
        Schema::dropIfExists('patient_registrations');
        Schema::create('patient_registrations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id')->nullable(); 
            $table->integer('helper_id')->nullable();            
            $table->integer('kohort_number')->nullable();
            $table->date('kia_book_receive_date')->nullable();
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
