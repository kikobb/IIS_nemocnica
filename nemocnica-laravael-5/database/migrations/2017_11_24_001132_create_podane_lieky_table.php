<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodaneLiekyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podane_lieky', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('liek_id');
            $table->unsignedInteger('vysetrenie_id');

            $table->string('cas');
            $table->string('mnozstvo');
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
        Schema::dropIfExists('podane_lieky');
    }
}
