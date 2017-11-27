<?php

use Illuminate\Database\Seeder;

class Podane_liekySeeder extends Seeder {

    public function run(){
        DB::table('podane_lieky')->delete();

        $item = array(
            'id' => 1,
            'liek_id' => 1,
            'vysetrenie_id' => 5,
            'davkovanie_cas' => "kazdych 12 hodin",
            'davkovanie_mnozstvo' => "10ml",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

        $item = array(
            'liek_id' => 2,
            'vysetrenie_id' => 4,
            'davkovanie_cas' => "kazde 3 hodiny",
            'davkovanie_mnozstvo' => "5 kvapiek",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

        $item = array(
            'liek_id' => 1,
            'vysetrenie_id' => 3,
            'davkovanie_cas' => "kazde 2 dni",
            'davkovanie_mnozstvo' => "500mg na den",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

        $item = array(
            'liek_id' => 4,
            'vysetrenie_id' => 2,
            'davkovanie_cas' => "kazdych 24 hodin",
            'davkovanie_mnozstvo' => "injekcia",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

        $item = array(
            'liek_id' => 3,
            'vysetrenie_id' => 1,
            'davkovanie_cas' => "kazde 2 mesiace",
            'davkovanie_mnozstvo' => "2 tablety",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

    }
}