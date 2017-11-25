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
            $table->tinyInteger('typ_ulohy_id');   //na urcenie ktora relacia je platna
            //^^^ odkaz do tabulky s pevne danymi 4 zapismi (riadkami) urcujucimi jeden druh ulohy
            $table->integer('user_id');

            $table->string('meno', 30);
            $table->string('priezvisko', 30);
            $table->string('mesto', 40);
            $table->string('PSC', 5);
            $table->string('ulica_cislo', 40);
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
