<?php

use Illuminate\Database\Seeder;

class IzbySeeder extends Seeder {

    public function run(){
        DB::table('izby')->delete();

        $item = array(
            'oddelenie_id' => 1,
            'typ' => "adsfa",
            'kapacita' => 24,
            'cislo' => 9,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')

        );

        DB::table('izby')->insert($item);
    }
}