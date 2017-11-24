<?php

use Illuminate\Database\Seeder;

class OsobySeeder extends Seeder {

    public function run(){
        DB::table('osoby')->delete();

        $item = array(
            'id_rodne_cislo' => 9857233342,
            'prijemca_id' => 1,
            'meno' => 'Alfonz',
            'priezvisko' => 'Hrbaty',
            'mesto' => 'Zvolen',
            'PSC' => '96001',
            'ulica_cislo' => 'Abrahamova 7',
            'datum_narodenia' => \Carbon\Carbon::parse('2017-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 9803090011,
            'prijemca_id' => 2,
            'meno' => 'Adam',
            'priezvisko' => 'Kemény',
            'mesto' => 'Galanta',
            'PSC' => '92401',
            'ulica_cislo' => 'MDŽ 98',
            'datum_narodenia' => \Carbon\Carbon::parse('1998-03-09'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);


        $item = array(
            'id_rodne_cislo' => 7953020009,
            'prijemca_id' => 4,
            'meno' => 'Elena',
            'priezvisko' => 'Radosová',
            'mesto' => 'Dvory nad Žitavou',
            'PSC' => '94131',
            'ulica_cislo' => 'Nový svet 20',
            'datum_narodenia' => \Carbon\Carbon::parse('1997-03-02'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 9207234487,
            'prijemca_id' => 5,
            'meno' => 'Jozef',
            'priezvisko' => 'Obertáš',
            'mesto' => 'Fáry',
            'PSC' => '90843',
            'ulica_cislo' => 'Nábrežná 96',
            'datum_narodenia' => \Carbon\Carbon::parse('1962-05-06'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 9207234487,
            'prijemca_id' => 1,
            'meno' => 'Peter',
            'priezvisko' => 'Ujlaky',
            'mesto' => 'Banská Bystrica',
            'PSC' => '97409',
            'ulica_cislo' => 'Zadunajská cesta 490',
            'datum_narodenia' => \Carbon\Carbon::parse('1992-04-23'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 6954090022,
            'pacient_id' => 1,
            'meno' => 'Lukáš',
            'priezvisko' => 'Varga',
            'mesto' => 'Tvrdošovce',
            'PSC' => '94110',
            'ulica_cislo' => 'K. Mikszátha 17',
            'datum_narodenia' => \Carbon\Carbon::parse('1969-10-11'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 9210115178,
            'pacient_id' => 1,
            'meno' => 'Júlia',
            'priezvisko' => 'Valková',
            'mesto' => 'Martin',
            'PSC' => '03861',
            'ulica_cislo' => 'Brezina 37',
            'datum_narodenia' => \Carbon\Carbon::parse('1992-10-11'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 6501115170,
            'pacient_id' => 1,
            'meno' => 'Adam',
            'priezvisko' => 'Kuvik',
            'mesto' => 'Klenovec',
            'PSC' => '98055',
            'ulica_cislo' => 'Malinovského 370',
            'datum_narodenia' => \Carbon\Carbon::parse('1965-01-11'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 6501030569,
            'pacient_id' => 1,
            'meno' => 'Hanna',
            'priezvisko' => 'Jeseniová',
            'mesto' => 'Mútne',
            'PSC' => '02963',
            'ulica_cislo' => 'Záhradkárska 30',
            'datum_narodenia' => \Carbon\Carbon::parse('1965-01-03'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 8309120567,
            'pacient_id' => 1,
            'meno' => 'Zuzana',
            'priezvisko' => 'Oravcová',
            'mesto' => 'Brezno',
            'PSC' => '97701',
            'ulica_cislo' => 'Nezábudková 49',
            'datum_narodenia' => \Carbon\Carbon::parse('1983-09-12'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 9803090011,
            'prijemca_id' => 1,
            'meno' => 'Peter',
            'priezvisko' => 'Pavlišinov',
            'mesto' => 'Košice',
            'PSC' => '04011',
            'ulica_cislo' => 'Višková 14',
            'datum_narodenia' => \Carbon\Carbon::parse('1994-05-03'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 9755194768,
            'sestra_id' => 1,
            'meno' => 'Ružena',
            'priezvisko' => 'Dobosiová',
            'mesto' => 'Lozorno',
            'PSC' => '90055',
            'ulica_cislo' => 'Školská 24',
            'datum_narodenia' => \Carbon\Carbon::parse('1997-05-19'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 9055163832,
            'sestra_id' => 1,
            'meno' => 'Dobroslav',
            'priezvisko' => 'Galovič',
            'mesto' => 'Bratislava',
            'PSC' => '85101',
            'ulica_cislo' => 'Osloboditeľov 222',
            'datum_narodenia' => \Carbon\Carbon::parse('1990-05-16'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 6554124533,
            'sestra_id' => 1,
            'meno' => 'Tomáš',
            'priezvisko' => 'Durčák',
            'mesto' => 'Bidovce',
            'PSC' => '04445',
            'ulica_cislo' => 'Užhorodská 306',
            'datum_narodenia' => \Carbon\Carbon::parse('1965-04-12'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 7353263863,
            'sestra_id' => 1,
            'meno' => 'Petra',
            'priezvisko' => 'Eckerová',
            'mesto' => 'Bratislava',
            'PSC' => '82107',
            'ulica_cislo' => 'Púpavová 77',
            'datum_narodenia' => \Carbon\Carbon::parse('1973-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 440326383,
            'sestra_id' => 1,
            'meno' => 'Katarína',
            'priezvisko' => 'Ronáková',
            'mesto' => 'Humenné',
            'PSC' => '06601',
            'ulica_cislo' => 'Sokolská 68',
            'datum_narodenia' => \Carbon\Carbon::parse('1944-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 9253266957,
            'doktor_id' => 1,
            'meno' => 'Roman',
            'priezvisko' => 'Ember',
            'mesto' => 'Hrachovo',
            'PSC' => '98052',
            'ulica_cislo' => 'Partizánska 56',
            'datum_narodenia' => \Carbon\Carbon::parse('1992-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 9003262708,
            'doktor_id' => 1,
            'meno' => 'Gabriel',
            'priezvisko' => 'Polakovič',
            'mesto' => 'Veľký Rur',
            'PSC' => '93534',
            'ulica_cislo' => 'Poštová 26',
            'datum_narodenia' => \Carbon\Carbon::parse('1990-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 7853268577,
            'doktor_id' => 1,
            'meno' => 'Filip',
            'priezvisko' => 'Daniš',
            'mesto' => 'Nové Zámky',
            'PSC' => '94002',
            'ulica_cislo' => 'Stavbárska 286',
            'datum_narodenia' => \Carbon\Carbon::parse('1978-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);

        $item = array(
            'id_rodne_cislo' => 6908085327,
            'doktor_id' => 1,
            'meno' => 'Erika',
            'priezvisko' => 'Gálová',
            'mesto' => 'Horné Lefantovce',
            'PSC' => '95145',
            'ulica_cislo' => 'Janka Kráľa 97',
            'datum_narodenia' => \Carbon\Carbon::parse('1969-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('osoby')->insert($item);


    }
}