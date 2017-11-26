<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Fluent;

class CreateDoktoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktori', function (Blueprint $table) {
            $table->increments('id');   //nenastavujem primary lebo increments je implicitne PK
            $table->unsignedInteger('osoba_id');
            $table->unsignedInteger('oddelenie_id');

            $table->string('uvazok', 10);
            $table->string('cislo_uctu', 25)->nullable();
            $table->string('telefon', 13)->nullable();
            $table->timestamps();
        });

//        Schema::table('doktori', function (Blueprint $table){
//            $table->foreign('fkey_rodne_cislo')->references('id_rodne_cislo')->on('osoby');
//        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doktori');
    }
}
