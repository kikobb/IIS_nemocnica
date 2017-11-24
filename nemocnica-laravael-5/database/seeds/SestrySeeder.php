<?php

use Illuminate\Database\Seeder;

class SestrySeeder extends Seeder {

    public function run(){
        DB::table('sestry')->delete();

        $item = array(
            'id' => 1,
            'osoba_id_rodne_cislo' => 11111111112,
            'oddelenie_id' => 1,
            'cislo_uctu' => "54352352351235",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('sestry')->insert($item);
    }
}