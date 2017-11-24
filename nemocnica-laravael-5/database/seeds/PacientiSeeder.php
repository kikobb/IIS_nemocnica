<?php

use Illuminate\Database\Seeder;

class PacientiSeeder extends Seeder {

    public function run(){
        DB::table('pacienti')->delete();

        $item = array(
            'osoba_id_rodne_cislo' => 11111111111,
            'cislo_poistovne' => 24,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('pacienti')->insert($item);
    }
}