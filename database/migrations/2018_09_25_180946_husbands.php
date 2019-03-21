<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Husbands extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('husbands');
        Schema::create('husbands', function (Blueprint $table) {
            $table->increments('id_husbands');
            $table->integer('id_patients')->unsigned();
            $table->string('email_husbands',200)->default("");
            $table->string('phone_number_husbands',200)->default("");
            $table->string('password_husbands',200)->default("");

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
