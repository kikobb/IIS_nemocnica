<?php

use Illuminate\Database\Seeder;

class VysetreniaSeeder extends Seeder {

    public function run(){
        DB::table('vysetrenia')->delete();

        $item = array(
            'doktor_id' => 5,
            'oddelenie_id' => 2,
            'pacient_id' => 1,
            'typ' => "preventivna prehliadka",
            //'cas' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('vysetrenia')->insert($item);

        $item = array(
            'doktor_id' => 3,
            'oddelenie_id' => 5,
            'pacient_id' => 4,
            'typ' => "preventivna prehliadka",
            //'cas' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('vysetrenia')->insert($item);

        $item = array(
            'doktor_id' => 3,
            'oddelenie_id' => 7,
            'pacient_id' => 2,
            'typ' => "preventivna prehliadka",
            //'cas' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('vysetrenia')->insert($item);

        $item = array(
            'doktor_id' => 5,
            'oddelenie_id' => 3,
            'pacient_id' => 2,
            'typ' => "rengen",
            //'cas' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('vysetrenia')->insert($item);

        $item = array(
            'doktor_id' => 4,
            'oddelenie_id' => 4,
            'pacient_id' => 3,
            'typ' => "rengen",
            //'cas' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('vysetrenia')->insert($item);
        
//uprava __        
        $item = array(
            'doktor_id' => 23,
            'oddelenie_id' => 2,
            'pacient_id' => 3,
            'typ' => "rengen",
            //todo cekni ci to nespadne
            'cas' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('vysetrenia')->insert($item);
    }
}
