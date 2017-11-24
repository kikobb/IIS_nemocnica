<?php

use Illuminate\Database\Seeder;

class PobytySeeder extends Seeder {

    public function run(){
        DB::table('pobyty')->delete();

        $item = array(
            'doktor_id' => 1,
            'pacient_id' => 1,
            'prijemca_id' => 1,
            'izba_id' => 1,
            'datum_prichodu' => \Carbon\Carbon::parse('2000-01-01'),
            'datum_odchodu' => \Carbon\Carbon::parse('2000-01-02'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pobyty')->insert($item);
    }
}