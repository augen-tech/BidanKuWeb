<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('children');
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('patient_id');
            $table->integer('baby_name_id');
            $table->date('birth_date');
            $table->string('birth_place',200);
            $table->integer('order');
            $table->integer('birth_certificate_number');
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
        Schema::dropIfExists('children');
    }
}
