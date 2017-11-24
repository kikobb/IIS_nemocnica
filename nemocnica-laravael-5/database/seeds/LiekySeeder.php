<?php

use Illuminate\Database\Seeder;

class LiekySeeder extends Seeder {

    public function run(){
        DB::table('lieky')->delete();

        $item = array(
            'nazov' => "Chilliburner",
            'ucinna_latka' => "kapsaicín",
            'kontraindikacia' => "extremny ubytok hmotnosti pri minimalnom pohybe, riziko psychickej zavislosti",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('lieky')->insert($item);

        $item = array(
            'nazov' => "Paralen",
            'ucinna_latka' => "Paracetamol",
            'kontraindikacia' => "kontraproduktivny",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('lieky')->insert($item);

        $item = array(
            'nazov' => "C-ecko",
            'ucinna_latka' => "vitamin C",
            'kontraindikacia' => "kontraproduktivny",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('lieky')->insert($item);

        $item = array(
            'nazov' => "Aderal",
            'ucinna_latka' => "amfetamin a dextroamfetamin",
            'kontraindikacia' => "nepravidelne busenie srdca, bolest brucha, chronicka nepsavost",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('lieky')->insert($item);

    }
}