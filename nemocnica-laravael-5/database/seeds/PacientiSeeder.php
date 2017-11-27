<?php

use Illuminate\Database\Seeder;

class PacientiSeeder extends Seeder {

    public function run(){
        DB::table('pacienti')->delete();

        $item = array(
            'id' => 1,
            'osoba_id' => 6,
            'cislo_poistovne' => '723D975297',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'id' => 2,
            'osoba_id' => 7,
            'cislo_poistovne' => '6787DF76R7',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'id' => 3,
            'osoba_id' => 8,
            'cislo_poistovne' => '67DD76EERT',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'id' => 4,
            'osoba_id' => 9,
            'cislo_poistovne' => '687SDF7689',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'id' => 5,
            'osoba_id' => 10,
            'cislo_poistovne' => 'DSF87898SF',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'id' => 6,
            'osoba_id' => 11,
            'cislo_poistovne' => 'DGF87898SF',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);

        $item = array(
            'id' => 7,
            'osoba_id' => 12,
            'cislo_poistovne' => 'DGF87898SF',
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);
    }
}