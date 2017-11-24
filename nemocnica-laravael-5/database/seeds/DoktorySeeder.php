<?php

use Illuminate\Database\Seeder;

class DoktorySeeder extends Seeder {

    public function run(){
        DB::table('doktori')->delete();

        $item = array(
            'id' => 1,
            'osoba_id_rodne_cislo' => 11111111111,
            'oddelenie_id' => 1,
            'cislo_uctu' => 26364512,
            'uvazok' => 'plny',
            'telefon' => '0903536790',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('doktori')->insert($item);
    }
}