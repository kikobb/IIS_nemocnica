<?php

use Illuminate\Database\Seeder;

class PrijemcoviaSeeder extends Seeder {

    public function run(){
        DB::table('prijemcovia')->delete();

        $item = array(
            'id' => 1,
            'osoba_id_rodne_cislo' => 9857233342,
            'cislo_uctu' => "4485396761194651",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);

        $item = array(
            'id' => 2,
            'osoba_id_rodne_cislo' => 9803090011,
            'cislo_uctu' => "4485866599581667",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);

        $item = array(
            'id' => 3,
            'osoba_id_rodne_cislo' => 7953020009,
            'cislo_uctu' => "5242122934843441",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);

        $item = array(
            'id' => 4,
            'osoba_id_rodne_cislo' => 6255060020,
            'cislo_uctu' => "5583003467504500",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);
        $item = array(
            'id' => 5,
            'osoba_id_rodne_cislo' => 9207234487,
            'cislo_uctu' => "6011010092719510",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);
    }
}