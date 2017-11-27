<?php

use Illuminate\Database\Seeder;

class OddeleniaSeeder extends Seeder {

    public function run(){
        DB::table('oddelenia')->delete();

        $item = array(
            'id' => 1,
            'nazov' => "JIS",
            'poschodie' => 1,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'id' => 2,
            'nazov' => "Chirurgia",
            'poschodie' => 1,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'id' => 3,
            'nazov' => "Traumatologia",
            'poschodie' => 2,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'id' => 4,
            'nazov' => "Interne oddlenie",
            'poschodie' => 2,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'id' => 5,
            'nazov' => "Geriatria",
            'poschodie' => 3,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'id' => 6,
            'nazov' => "Neurologicke",
            'poschodie' => 4,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'id' => 7,
            'nazov' => "Urologia",
            'poschodie' => 4,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);
    }
}