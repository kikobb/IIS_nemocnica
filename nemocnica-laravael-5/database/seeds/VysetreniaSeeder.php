<?php

use Illuminate\Database\Seeder;

class VysetreniaSeeder extends Seeder {

    public function run(){
        DB::table('vysetrenia')->delete();

        $item = array(
            'doktor_id' => 1,
            'oddelenie_id' => 1,
            'pacient_id' => 1,
            'typ' => "invazivne",
            'cas' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('vysetrenia')->insert($item);
    }
}