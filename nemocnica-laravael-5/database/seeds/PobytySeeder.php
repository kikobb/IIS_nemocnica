<?php

use Illuminate\Database\Seeder;

class PobytySeeder extends Seeder {

    public function run(){
        DB::table('pobyty')->delete();

        $item = array(
            'doktor_id' => 5,
            'pacient_id' => 4,
            'prijemca_id' => 5,
            'izba_id' => 1,
            'datum_prichodu' => \Carbon\Carbon::parse('2015-03-20'),
            'datum_odchodu' => \Carbon\Carbon::parse('2015-03-28'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pobyty')->insert($item);

        $item = array(
            'doktor_id' => 3,
            'pacient_id' => 2,
            'prijemca_id' => 1,
            'izba_id' => 2,
            'datum_prichodu' => \Carbon\Carbon::parse('2016-11-14'),
            'datum_odchodu' => \Carbon\Carbon::parse('2017-03-05'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pobyty')->insert($item);

        $item = array(
            'doktor_id' => 4,
            'pacient_id' => 4,
            'prijemca_id' => 4,
            'izba_id' => 4,
            'datum_prichodu' => \Carbon\Carbon::parse('2016-01-10'),
            'datum_odchodu' => \Carbon\Carbon::parse('2016-06-16'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pobyty')->insert($item);

        $item = array(
            'doktor_id' => 2,
            'pacient_id' => 3,
            'prijemca_id' => 1,
            'izba_id' => 1,
            'datum_prichodu' => \Carbon\Carbon::parse('2016-07-02'),
            'datum_odchodu' => \Carbon\Carbon::parse('2017-07-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pobyty')->insert($item);

        $item = array(
            'doktor_id' => 2,
            'pacient_id' => 3,
            'prijemca_id' => 1,
            'izba_id' => 1,
            'datum_prichodu' => \Carbon\Carbon::parse('2015-08-31'),
            'datum_odchodu' => \Carbon\Carbon::parse('2015-09-28'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pobyty')->insert($item);

    }
}