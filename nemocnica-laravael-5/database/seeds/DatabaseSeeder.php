<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
//        $this->call(DoktoriSeeder::class);
        $this->call(IzbySeeder::class);
        $this->call(LiekySeeder::class);
        $this->call(OddeleniaSeeder::class);
//        $this->call(PacientiSeeder::class);
        $this->call(PobytySeeder::class);
        $this->call(Podane_liekySeeder::class);
//        $this->call(PrijemcoviaSeeder::class);
        $this->call(VysetreniaSeeder::class);
//        $this->call(Typy_ulohSeeder::class);
//        $this->call(SestrySeeder::class);
        $this->call(UsersSeeder::class);

    }
}
