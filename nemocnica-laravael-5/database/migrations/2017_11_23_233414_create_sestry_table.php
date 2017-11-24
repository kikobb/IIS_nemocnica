<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSestryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sestry', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('osoba_id_rodne_cislo')->unsigned();
            $table->unsignedInteger('oddelenie_id');

            $table->string('cislo_uctu', 25);
            $table->timestamps();
        });

        //vytvorenie foreign key
//        Schema::table('sestry', function (Blueprint $table){
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
        Schema::dropIfExists('sestry');
    }
}
