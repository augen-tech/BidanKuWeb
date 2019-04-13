<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHusbandsTable extends Migration
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
            $table->increments('id');
            $table->integer('patient_id');
            $table->string('email',200)->nullable();
            $table->integer('phone_number')->nullable();
            $table->string('password',200)->nullable();
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
        Schema::dropIfExists('husbands');
    }
}
