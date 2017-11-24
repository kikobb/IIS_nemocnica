<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIzbyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izby', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('oddelenie_id');

            $table->string('typ', 20)->default("neznamy");
            $table->unsignedSmallInteger('kapacita');
            $table->unsignedInteger('cislo');
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
        Schema::dropIfExists('izby');
    }
}
