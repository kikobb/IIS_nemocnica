<?php

use Illuminate\Database\Seeder;

class Podane_liekySeeder extends Seeder {

    public function run(){
        DB::table('podane_lieky')->delete();

        $item = array(
            'id' => 1,
            'liek_id' => 1,
            'vysetrenie_id' => 5,
            'cas' => "kazdych 12 hodin",
            'mnozstvo' => "10ml",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

        $item = array(
            'liek_id' => 2,
            'vysetrenie_id' => 4,
            'cas' => "kazde 3 hodiny",
            'mnozstvo' => "5 kvapiek",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

        $item = array(
            'liek_id' => 1,
            'vysetrenie_id' => 3,
            'cas' => "kazde 2 dni",
            'mnozstvo' => "500mg na den",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);
//uprava --
         $item = array(
            'liek_id' => 4,
            'vysetrenie_id' => 6,
            'cas' => "kazde 2 hodiny",
            'mnozstvo' => "500mg jedna davka",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

        $item = array(
            'liek_id' => 4,
            'vysetrenie_id' => 2,
            'cas' => "kazdych 24 hodin",
            'mnozstvo' => "injekcia",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

        $item = array(
            'liek_id' => 3,
            'vysetrenie_id' => 1,
            'cas' => "kazde 2 mesiace",
            'mnozstvo' => "2 tablety",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('podane_lieky')->insert($item);

    }
}
