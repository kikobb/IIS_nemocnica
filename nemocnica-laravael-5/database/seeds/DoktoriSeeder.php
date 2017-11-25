<?php

use Illuminate\Database\Seeder;

class DoktoriSeeder extends Seeder {

    public function run(){
        DB::table('doktori')->delete();

        $item = array(
            'id' => 1,
            'osoba_id_rodne_cislo' => 6908085327,
            'oddelenie_id' => 3,
            'cislo_uctu' => 459800000015939,
            'uvazok' => 'plny',
            'telefon' => '+421903535896',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('doktori')->insert($item);

        $item = array(
            'id' => 2,
            'osoba_id_rodne_cislo' => 7853268577,
            'oddelenie_id' => 5,
            'cislo_uctu' => 373949910930046,
            'uvazok' => 'polovicny',
            'telefon' => '+421903574023',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('doktori')->insert($item);

        $item = array(
            'id' => 3,
            'osoba_id_rodne_cislo' => 9003262708,
            'oddelenie_id' => 7,
            'cislo_uctu' => 6011709166851386,
            'uvazok' => 'plny',
            'telefon' => '+421908234784',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('doktori')->insert($item);
        $item = array(
            'id' => 4,
            'osoba_id_rodne_cislo' => 9253266957,
            'oddelenie_id' => 4,
            'cislo_uctu' => 5242122934843441,
            'uvazok' => 'prax',
            'telefon' => '+421908234784',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('doktori')->insert($item);

        $item = array(
            'id' => 5,
            'osoba_id_rodne_cislo' => 9803090012,
            'oddelenie_id' => 3,
            'cislo_uctu' => 4716160243534343,
            'uvazok' => 'polovicny',
            'telefon' => '+421911356376',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('doktori')->insert($item);
    }
}