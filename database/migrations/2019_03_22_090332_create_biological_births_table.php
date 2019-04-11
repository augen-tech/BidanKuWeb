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
        Schema::dropIfExists('biological_births');
        Schema::create('biological_births', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pregnancy_info_id');
            $table->date('birth_date');
            $table->date('last_immunitation_date');
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
