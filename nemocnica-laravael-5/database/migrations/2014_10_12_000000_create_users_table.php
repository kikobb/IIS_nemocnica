<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            //osoba
            $table->string('pozicia');
            $table->string('meno', 30);
            $table->string('priezvisko', 30);
            $table->string('rodne_cislo', 11)->nullable();
            $table->string('mesto', 40)->nullable();
            $table->string('psc', 5)->nullable();
            $table->string('ulica_cislo', 40)->nullable();
            $table->string('stat', 20)->nullable();
            $table->date('datum_narodenia')->nullable();
            //doktor, sestra, prijemca
            $table->string('uvazok', 10)->nullable();
            $table->string('cislo_uctu', 25)->nullable();
            $table->string('telefon', 13)->nullable();
            $table->integer('oddelenie_doktor_id')->unsigned()->nullable();
            $table->integer('oddelenie_sestra_id')->unsigned()->nullable();

            //pacient
            $table->string('cislo_poistovne', 10)->nullable();


            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
