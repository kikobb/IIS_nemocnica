<?php

use Illuminate\Database\Seeder;

class OddeleniaSeeder extends Seeder {

    public function run(){
        DB::table('oddelenia')->delete();

        $item = array(
            'id' => 1,
            'nazov' => "geriatria",
            'poschodie' => 0,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);
    }
}