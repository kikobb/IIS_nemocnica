<?php

use Illuminate\Database\Seeder;

class OsobySeeder extends Seeder {

    public function run(){
        DB::table('users')->delete();

        $item = array(
            'id' => 1,
            'rodne_cislo' => '9857233342',
            'typ_ulohy' => 'pacient',
            'meno' => 'Alfonz',
            'priezvisko' => 'Hrbaty',
            'mesto' => 'Zvolen',
            'psc' => '96001',
            'ulica_cislo' => 'Abrahamova 7',
            'datum_narodenia' => \Carbon\Carbon::parse('2017-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 2,
            'rodne_cislo' => '9803090011',
            'typ_ulohy' => 'pacient',
            'meno' => 'Adam',
            'priezvisko' => 'Kemény',
            'mesto' => 'Galanta',
            'psc' => '92401',
            'ulica_cislo' => 'MDŽ 98',
            'datum_narodenia' => \Carbon\Carbon::parse('1998-03-09'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 3,
            'rodne_cislo' => '7953020009',
            'typ_ulohy' => 'pacient',
            'meno' => 'Elena',
            'priezvisko' => 'Radosová',
            'mesto' => 'Dvory nad Žitavou',
            'psc' => '94131',
            'ulica_cislo' => 'Nový svet 20',
            'datum_narodenia' => \Carbon\Carbon::parse('1997-03-02'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 4,
            'rodne_cislo' => '9207234487',
            'typ_ulohy' => 'pacient',
            'meno' => 'Jozef',
            'priezvisko' => 'Obertáš',
            'mesto' => 'Fáry',
            'psc' => '90843',
            'ulica_cislo' => 'Nábrežná 96',
            'datum_narodenia' => \Carbon\Carbon::parse('1962-05-06'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 5,
            'rodne_cislo' => '9207234488',
            'typ_ulohy' => 'pacient',
            'meno' => 'Lukáš',
            'priezvisko' => 'Obertáš',
            'mesto' => 'Fáry',
            'psc' => '90843',
            'ulica_cislo' => 'Nábrežná 96',
            'datum_narodenia' => \Carbon\Carbon::parse('1962-05-06'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 6,
            'rodne_cislo' => '9207234488',
            'typ_ulohy' => 'prijemca',
            'meno' => 'Peter',
            'priezvisko' => 'Ujlaky',
            'mesto' => 'Banská Bystrica',
            'psc' => '97409',
            'ulica_cislo' => 'Zadunajská cesta 490',
            'datum_narodenia' => \Carbon\Carbon::parse('1992-04-23'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 7,
            'rodne_cislo' => '6954090022',
            'typ_ulohy' => 'prijemca',
            'meno' => 'Lukáš',
            'priezvisko' => 'Varga',
            'mesto' => 'Tvrdošovce',
            'psc' => '94110',
            'ulica_cislo' => 'K. Mikszátha 17',
            'datum_narodenia' => \Carbon\Carbon::parse('1969-10-11'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 8,
            'rodne_cislo' => '9210115178',
            'typ_ulohy' => 'prijemca',
            'meno' => 'Júlia',
            'priezvisko' => 'Valková',
            'mesto' => 'Martin',
            'psc' => '03861',
            'ulica_cislo' => 'Brezina 37',
            'datum_narodenia' => \Carbon\Carbon::parse('1992-10-11'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 9,
            'rodne_cislo' => '9405034419',
            'typ_ulohy' => 'prijemca',
            'meno' => 'Adam',
            'priezvisko' => 'Kuvik',
            'mesto' => 'Klenovec',
            'psc' => '98055',
            'ulica_cislo' => 'Malinovského 370',
            'datum_narodenia' => \Carbon\Carbon::parse('1965-01-11'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 10,
            'rodne_cislo' => '6501030569',
            'typ_ulohy' => 'prijemca',
            'meno' => 'Hanna',
            'priezvisko' => 'Jeseniová',
            'mesto' => 'Mútne',
            'psc' => '02963',
            'ulica_cislo' => 'Záhradkárska 30',
            'datum_narodenia' => \Carbon\Carbon::parse('1965-01-03'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 11,
            'rodne_cislo' => '8309120567',
            'typ_ulohy' => 'prijemca',
            'meno' => 'Zuzana',
            'priezvisko' => 'Oravcová',
            'mesto' => 'Brezno',
            'psc' => '97701',
            'ulica_cislo' => 'Nezábudková 49',
            'datum_narodenia' => \Carbon\Carbon::parse('1983-09-12'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 12,
            'rodne_cislo' => '440326383',
            'typ_ulohy' => 'prijemca',
            'meno' => 'Katarína',
            'priezvisko' => 'Ronáková',
            'mesto' => 'Humenné',
            'psc' => '06601',
            'ulica_cislo' => 'Sokolská 68',
            'datum_narodenia' => \Carbon\Carbon::parse('1944-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 13,
            'rodne_cislo' => '9755194768',
            'typ_ulohy' => 'sestra',
            'meno' => 'Ružena',
            'priezvisko' => 'Dobosiová',
            'mesto' => 'Lozorno',
            'psc' => '90055',
            'ulica_cislo' => 'Školská 24',
            'datum_narodenia' => \Carbon\Carbon::parse('1997-05-19'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 14,
            'rodne_cislo' => '9055163832',
            'typ_ulohy' => 'sestra',
            'meno' => 'Dobroslav',
            'priezvisko' => 'Galovič',
            'mesto' => 'Bratislava',
            'psc' => '85101',
            'ulica_cislo' => 'Osloboditeľov 222',
            'datum_narodenia' => \Carbon\Carbon::parse('1990-05-16'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 15,
            'rodne_cislo' => '6554124533',
            'typ_ulohy' => 'sestra',
            'meno' => 'Tomáš',
            'priezvisko' => 'Durčák',
            'mesto' => 'Bidovce',
            'psc' => '04445',
            'ulica_cislo' => 'Užhorodská 306',
            'datum_narodenia' => \Carbon\Carbon::parse('1965-04-12'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 16,
            'rodne_cislo' => '7353263863',
            'typ_ulohy' => 'sestra',
            'meno' => 'Petra',
            'priezvisko' => 'Eckerová',
            'mesto' => 'Bratislava',
            'psc' => '82107',
            'ulica_cislo' => 'Púpavová 77',
            'datum_narodenia' => \Carbon\Carbon::parse('1973-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 17,
            'rodne_cislo' => '9253266957',
            'typ_ulohy' => 'doktor',
            'meno' => 'Roman',
            'priezvisko' => 'Ember',
            'mesto' => 'Hrachovo',
            'psc' => '98052',
            'ulica_cislo' => 'Partizánska 56',
            'datum_narodenia' => \Carbon\Carbon::parse('1992-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 18,
            'rodne_cislo' => '9003262708',
            'typ_ulohy' => 'doktor',
            'meno' => 'Gabriel',
            'priezvisko' => 'Polakovič',
            'mesto' => 'Veľký Rur',
            'psc' => '93534',
            'ulica_cislo' => 'Poštová 26',
            'datum_narodenia' => \Carbon\Carbon::parse('1990-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 19,
            'rodne_cislo' => '7853268577',
            'typ_ulohy' => 'doktor',
            'meno' => 'Filip',
            'priezvisko' => 'Daniš',
            'mesto' => 'Nové Zámky',
            'psc' => '94002',
            'ulica_cislo' => 'Stavbárska 286',
            'datum_narodenia' => \Carbon\Carbon::parse('1978-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 20,
            'rodne_cislo' => '6908085327',
            'typ_ulohy' => 'doktor',
            'meno' => 'Erika',
            'priezvisko' => 'Gálová',
            'mesto' => 'Horné Lefantovce',
            'psc' => '95145',
            'ulica_cislo' => 'Janka Kráľa 97',
            'datum_narodenia' => \Carbon\Carbon::parse('1969-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);

        $item = array(
            'id' => 21,
            'rodne_cislo' => '9803090012',
            'typ_ulohy' => 'doktor',
            'meno' => 'Peter',
            'priezvisko' => 'Pavlišinov',
            'mesto' => 'Košice',
            'psc' => '04011',
            'ulica_cislo' => 'Višková 14',
            'datum_narodenia' => \Carbon\Carbon::parse('1994-05-03'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item);
    }
}