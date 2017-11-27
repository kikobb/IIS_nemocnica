<?php

use Illuminate\Database\Seeder;

class IzbySeeder extends Seeder {

    public function run(){
        DB::table('izby')->delete();

        $item = array(
            'id' => 1,
            'oddelenie_id' => 1,
            'typ' => "muzi",
            'kapacita' => 4,
            'cislo' => 412,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')

        );

        DB::table('izby')->insert($item);

        $item = array(
            'oddelenie_id' => 2,
            'typ' => "muzi",
            'kapacita' => 6,
            'cislo' => 123,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')

        );

        DB::table('izby')->insert($item);

        $item = array(
            'oddelenie_id' => 5,
            'typ' => "zeny",
            'kapacita' => 2,
            'cislo' => 177,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')

        );

        DB::table('izby')->insert($item);

        $item = array(
            'oddelenie_id' => 5,
            'typ' => "zeny",
            'kapacita' => 2,
            'cislo' => 100,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')

        );

        DB::table('izby')->insert($item);

        $item = array(
            'oddelenie_id' => 1,
            'typ' => "zeny",
            'kapacita' => 2,
            'cislo' => 433,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')

        );

        DB::table('izby')->insert($item);

        $item = array(
            'oddelenie_id' => 1,
            'typ' => "zeny",
            'kapacita' => 2,
            'cislo' => 443,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')

        );

        DB::table('izby')->insert($item);

    }
}