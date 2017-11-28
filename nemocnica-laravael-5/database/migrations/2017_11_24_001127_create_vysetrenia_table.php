<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVysetreniaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vysetrenia', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('doktor_id');
            $table->unsignedInteger('oddelenie_id');
            $table->unsignedInteger('pacient_id');

            $table->string('typ', 100)->default("neznamy");
            $table->string('sprava', 2048)->nullable();
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
        Schema::dropIfExists('vysetrenia');
    }
}
