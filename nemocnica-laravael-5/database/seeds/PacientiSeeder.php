<?php

use Illuminate\Database\Seeder;

class PacientiSeeder extends Seeder {

    public function run(){
        DB::table('pacienti')->delete();

        $item = array(
            'osoba_id_rodne_cislo' => 9210115178,
            'cislo_poistovne' => '723D975297',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'osoba_id_rodne_cislo' => 6954090022,
            'cislo_poistovne' => '6787DF76R7',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'osoba_id_rodne_cislo' => 6501030569,
            'cislo_poistovne' => '67DD76EERT',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'osoba_id_rodne_cislo' => 8309120567,
            'cislo_poistovne' => '687SDF7689',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'osoba_id_rodne_cislo' => 9405034419,
            'cislo_poistovne' => 'DSF87898SF',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'osoba_id_rodne_cislo' => 440326383,
            'cislo_poistovne' => 'DGF87898SF',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);
    }
}