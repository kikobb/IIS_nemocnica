<?php

use Illuminate\Database\Seeder;

class PrijemcoviaSeeder extends Seeder {

    public function run(){
        DB::table('prijemcovia')->delete();

        $item = array(
            'id' => 1,
            'osoba_id' => 1,
            'cislo_uctu' => "4485396761194651",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);

        $item = array(
            'id' => 2,
            'osoba_id' => 2,
            'cislo_uctu' => "4485866599581667",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);

        $item = array(
            'id' => 3,
            'osoba_id' => 3,
            'cislo_uctu' => "5242122934843441",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);

        $item = array(
            'id' => 4,
            'osoba_id' => 4,
            'cislo_uctu' => "5583003467504500",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);
        $item = array(
            'id' => 5,
            'osoba_id' => 5,
            'cislo_uctu' => "6011010092719510",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);
    }
}