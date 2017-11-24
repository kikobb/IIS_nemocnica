<?php

use Illuminate\Database\Seeder;

class OddeleniaSeeder extends Seeder {

    public function run(){
        DB::table('oddelenia')->delete();

        $item = array(
            'nazov' => "JIS",
            'poschodie' => 1,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'nazov' => "Chirurgia",
            'poschodie' => 1,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'nazov' => "Traumatologia",
            'poschodie' => 2,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'nazov' => "Interne oddlenie",
            'poschodie' => 2,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'nazov' => "Geriatria",
            'poschodie' => 3,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'nazov' => "Neurologicke",
            'poschodie' => 4,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);

        $item = array(
            'nazov' => "Urologia",
            'poschodie' => 4,
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('oddelenia')->insert($item);
    }
}