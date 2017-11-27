<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {

    public function run(){
        DB::table('users')->delete();
        $cislo = 1;

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);
        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        $cislo++;

        DB::table('users')->insert($item);

        $item = array(
            'id' => $cislo,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo)
        );

        //$cislo++;

        DB::table('users')->insert($item);

    }
}