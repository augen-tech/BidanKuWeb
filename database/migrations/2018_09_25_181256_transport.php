<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Transport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('transport');
        Schema::create('transport', function (Blueprint $table) {
            $table->increments('id_transport');
            $table->string('driver_name',200);
            $table->string('driver_phone_number',200);
            $table->string('transport_detail',200);

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
