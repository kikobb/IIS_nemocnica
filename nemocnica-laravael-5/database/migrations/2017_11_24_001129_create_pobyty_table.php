<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePobytyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pobyty', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('doktor_id');
            $table->unsignedInteger('pacient_id');
            $table->unsignedInteger('prijemca_id');
            $table->unsignedInteger('izba_id');

            $table->date('datum_prichodu');
            $table->date('datum_odchodu')->nullable();
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
        Schema::dropIfExists('pobyty');
    }
}
