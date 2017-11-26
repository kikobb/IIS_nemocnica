<?php

use Illuminate\Database\Seeder;

class Typy_ulohSeeder extends Seeder {

    public function run(){
        DB::table('typy_uloh')->delete();

        $item = array(
            'id' => 1,
            'nazov' => "doktor"
        );

        DB::table('typy_uloh')->insert($item);

        $item = array(
            'id' => 2,
            'nazov' => "sestra"
        );

        DB::table('typy_uloh')->insert($item);

        $item = array(
            'id' => 3,
            'nazov' => "pacient"
        );

        DB::table('typy_uloh')->insert($item);

        $item = array(
            'id' => 4,
            'nazov' => "prijemca"
        );

        DB::table('typy_uloh')->insert($item);

        $item = array(
            'id' => 5,
            'nazov' => "admin"
        );

        DB::table('typy_uloh')->insert($item);
    }
}