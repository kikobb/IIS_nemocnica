<?php

use Illuminate\Database\Seeder;

class OsobySeeder extends Seeder {

    public function run(){
        DB::table('osoby')->delete();

        $item = array(
            'id_rodne_cislo' => 11111111111,
            'doktor_id' => 1,
            'meno' => 'John',
            'priezvisko' => 'Terry',
            'adresa' => str_random(25),
            'datum_narodenia' => \Carbon\Carbon::parse('2000-01-01'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 11111111112,
            'sestra_id' => 1,
            'meno' => 'John',
            'priezvisko' => 'Terry',
            'adresa' => str_random(25),
            'datum_narodenia' => \Carbon\Carbon::parse('2000-01-01'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 11111111113,
            'pacient_id' => 1,
            'meno' => 'John',
            'priezvisko' => 'Terry',
            'adresa' => str_random(25),
            'datum_narodenia' => \Carbon\Carbon::parse('2000-01-01'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 11111111114,
            'prijemca_id' => 1,
            'meno' => 'John',
            'priezvisko' => 'Terry',
            'adresa' => str_random(25),
            'datum_narodenia' => \Carbon\Carbon::parse('2000-01-01'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);
    }
}