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
            $table->increments('id');
            $table->tinyInteger('typ_ulohy_id');   //na urcenie ktora relacia je platna
            //^^^ odkaz do tabulky s pevne danymi 4 zapismi (riadkami) urcujucimi jeden druh ulohy
            $table->integer('user_id');

            $table->string('meno', 30);
            $table->string('priezvisko', 30);
            $table->string('rodne_cislo', 11)->nullable();
            $table->string('mesto', 40)->nullable();
            $table->string('PSC', 5)->nullable();
            $table->string('ulica_cislo', 40)->nullable();
            $table->date('datum_narodenia')->nullable();
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
