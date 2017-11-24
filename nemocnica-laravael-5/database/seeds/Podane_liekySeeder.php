<?php

use Illuminate\Database\Seeder;

class Podane_liekySeeder extends Seeder {

    public function run(){
        DB::table('podane_lieky')->delete();

        $item = array(
            'liek_id' => 1,
            'vysetrenie_id' => 1,
            'davkovanie_cas' => "raz za den na obed",
            'davkovanie_mnozstvo' => "500mg na den",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);
    }
}