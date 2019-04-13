<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('helpers');
        Schema::create('helpers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email',200);
            $table->integer('phone_number');
            $table->string('password',200);
            $table->timestamps();
        });

        DB::update("ALTER TABLE helpers AUTO_INCREMENT = 0;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('helpers');
    }
}
