<?php

use Illuminate\Database\Seeder;

class LiekySeeder extends Seeder {

    public function run(){
        DB::table('lieky')->delete();

        $item = array(
            'nazov' => "robitusin",
            'ucinna_latka' => "bitusin",
            'kontraindikacia' => "(A v B) ^ (A` ^ B`)",
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('lieky')->insert($item);
    }
}