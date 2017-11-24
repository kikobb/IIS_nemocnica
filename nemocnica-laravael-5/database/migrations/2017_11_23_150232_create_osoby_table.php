<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOsobyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osoby', function (Blueprint $table) {
            $table->bigInteger('id_rodne_cislo')->unsigned();
            $table->primary('id_rodne_cislo');  //treba nastavit primary lebo bigInt nieje implicitne PK
            $table->unsignedInteger('doktor_id')->nullable($value = true);
            $table->unsignedInteger('sestra_id')->nullable($value = true);
            $table->unsignedInteger('pacient_id')->nullable($value = true);
            $table->unsignedInteger('prijemca_id')->nullable($value = true);
            //todo mozno pridaj nejaky priznak ze osoba uz ma svojho vlastnoka

            $table->string('meno', 30);
            $table->string('priezvisko', 30);
            $table->string('adresa', 50);
            $table->date('datum_narodenia');
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
        Schema::dropIfExists('osoby');
    }
}
