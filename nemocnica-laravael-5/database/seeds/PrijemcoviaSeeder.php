<?php

use Illuminate\Database\Seeder;

class PrijemcoviaSeeder extends Seeder {

    public function run(){
        DB::table('prijemcovia')->delete();

        $item = array(
            'osoba_id_rodne_cislo' => 11111111112,
            'cislo_uctu' => "54352352351235",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('prijemcovia')->insert($item);
    }
}