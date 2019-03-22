<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        down();
        Schema::create('transports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('driver_name',200);
            $table->string('driver_phone_number',200);
            $table->string('transport_detail',200);
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
        Schema::dropIfExists('transports');
    }
}
