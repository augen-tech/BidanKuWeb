<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BiologicalBirths extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('biological_births');
        Schema::create('biological_births', function (Blueprint $table) {
            $table->increments('id_biological_births');
            $table->integer('id_pregnancy_info')->unsigned();
            $table->string('birth_date',200);
            $table->string('last_immunitation_date',200);
            $table->string('labor_method',200);
            $table->string('success_status',200);
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
