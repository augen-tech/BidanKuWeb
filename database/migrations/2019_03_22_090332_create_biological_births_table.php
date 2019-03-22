<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiologicalBirthsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        down();
        Schema::create('biological_births', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pregnancy_info_id')->unsigned();
            $table->string('birth_date',200);
            $table->string('last_immunitation_date',200);
            $table->string('labor_method',200);
            $table->string('success_status',200);
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
        Schema::dropIfExists('biological_births');
    }
}
