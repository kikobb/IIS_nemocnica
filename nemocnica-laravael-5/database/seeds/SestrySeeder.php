<?php

use Illuminate\Database\Seeder;

class SestrySeeder extends Seeder {

    public function run(){
        DB::table('sestry')->delete();

        $item = array(
            'id' => 1,
            'osoba_id_rodne_cislo' => 9755194768,
            'oddelenie_id' => 1,
            'cislo_uctu' => "54352352351235",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('sestry')->insert($item);

        $item = array(
            'id' => 2,
            'osoba_id_rodne_cislo' => 9055163832,
            'oddelenie_id' => 2,
            'cislo_uctu' => "54352352351235",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('sestry')->insert($item);

        $item = array(
            'id' => 3,
            'osoba_id_rodne_cislo' => 6554124533,
            'oddelenie_id' => 3,
            'cislo_uctu' => "54352352351235",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('sestry')->insert($item);

        $item = array(
            'id' => 4,
            'osoba_id_rodne_cislo' => 7353263863,
            'oddelenie_id' => 4,
            'cislo_uctu' => "54352352351235",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('sestry')->insert($item);

    }
}