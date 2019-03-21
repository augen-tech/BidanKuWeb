<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Childs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('childs');
        Schema::create('childs', function (Blueprint $table) {
            $table->increments('id_childs');
            $table->integer('id_patients')->unsigned();
            $table->integer('id_baby_names')->unsigned();
            $table->string('childs_birth_date',200);
            $table->string('childs_birth_place',200);
            $table->string('childs_child_order',200);
            $table->string('childs_birth_certificate_number',200);
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
