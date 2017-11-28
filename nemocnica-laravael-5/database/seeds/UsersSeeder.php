<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder {

    public function run(){
        DB::table('users')->delete();
        $cislo = 1;

        $item = array(
            'id' => $cislo,// 1,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9857233342',
            'pozicia' => 'admin', 'cislo_poistovne' => '723D975297',
            'meno' => 'Alfonz',
            'priezvisko' => 'Hrbaty',
            'mesto' => 'Zvolen',
            'psc' => '96001',
            'ulica_cislo' => 'Abrahamova 7',
            'datum_narodenia' => \Carbon\Carbon::parse('2017-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 2,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9803090011',
            'pozicia' => 'doktor', 'cislo_poistovne' => '723D975297',
            'meno' => 'Adam',
            'priezvisko' => 'Kemény',
            'mesto' => 'Galanta',
            'psc' => '92401',
            'ulica_cislo' => 'MDŽ 98',
            'datum_narodenia' => \Carbon\Carbon::parse('1998-03-09'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 3,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '7953020009',
            'pozicia' => 'sestra', 'cislo_poistovne' => '723D975297',
            'meno' => 'Elena',
            'priezvisko' => 'Radosová',
            'mesto' => 'Dvory nad Žitavou',
            'psc' => '94131',
            'ulica_cislo' => 'Nový svet 20',
            'datum_narodenia' => \Carbon\Carbon::parse('1997-03-02'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 4,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9207234487',
            'pozicia' => 'prijemca', 'cislo_poistovne' => '723D975297',
            'meno' => 'Jozef',
            'priezvisko' => 'Obertáš',
            'mesto' => 'Fáry',
            'psc' => '90843',
            'ulica_cislo' => 'Nábrežná 96',
            'datum_narodenia' => \Carbon\Carbon::parse('1962-05-06'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 5,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9207234488',
            'pozicia' => 'pacient', 'cislo_poistovne' => '723D975297',
            'meno' => 'Lukáš',
            'priezvisko' => 'Obertáš',
            'mesto' => 'Fáry',
            'psc' => '90843',
            'ulica_cislo' => 'Nábrežná 96',
            'datum_narodenia' => \Carbon\Carbon::parse('1962-05-06'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 6,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9207234488',
            'pozicia' => 'prijemca', 'cislo_uctu' => "4485396761194651",
            'meno' => 'Peter',
            'priezvisko' => 'Ujlaky',
            'mesto' => 'Banská Bystrica',
            'psc' => '97409',
            'ulica_cislo' => 'Zadunajská cesta 490',
            'datum_narodenia' => \Carbon\Carbon::parse('1992-04-23'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 7,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '6954090022',
            'pozicia' => 'prijemca', 'cislo_uctu' => "4485396761194651",
            'meno' => 'Lukáš',
            'priezvisko' => 'Varga',
            'mesto' => 'Tvrdošovce',
            'psc' => '94110',
            'ulica_cislo' => 'K. Mikszátha 17',
            'datum_narodenia' => \Carbon\Carbon::parse('1969-10-11'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 8,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9210115178',
            'pozicia' => 'prijemca', 'cislo_uctu' => "4485396761194651",
            'meno' => 'Júlia',
            'priezvisko' => 'Valková',
            'mesto' => 'Martin',
            'psc' => '03861',
            'ulica_cislo' => 'Brezina 37',
            'datum_narodenia' => \Carbon\Carbon::parse('1992-10-11'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 9,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9405034419',
            'pozicia' => 'prijemca', 'cislo_uctu' => "4485396761194651",
            'meno' => 'Adam',
            'priezvisko' => 'Kuvik',
            'mesto' => 'Klenovec',
            'psc' => '98055',
            'ulica_cislo' => 'Malinovského 370',
            'datum_narodenia' => \Carbon\Carbon::parse('1965-01-11'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 10,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '6501030569',
            'pozicia' => 'prijemca', 'cislo_uctu' => "4485396761194651",
            'meno' => 'Hanna',
            'priezvisko' => 'Jeseniová',
            'mesto' => 'Mútne',
            'psc' => '02963',
            'ulica_cislo' => 'Záhradkárska 30',
            'datum_narodenia' => \Carbon\Carbon::parse('1965-01-03'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 11,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '8309120567',
            'pozicia' => 'prijemca', 'cislo_uctu' => "4485396761194651",
            'meno' => 'Zuzana',
            'priezvisko' => 'Oravcová',
            'mesto' => 'Brezno',
            'psc' => '97701',
            'ulica_cislo' => 'Nezábudková 49',
            'datum_narodenia' => \Carbon\Carbon::parse('1983-09-12'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 12,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '440326383',
            'pozicia' => 'prijemca', 'cislo_uctu' => "4485396761194651",
            'meno' => 'Katarína',
            'priezvisko' => 'Ronáková',
            'mesto' => 'Humenné',
            'psc' => '06601',
            'ulica_cislo' => 'Sokolská 68',
            'datum_narodenia' => \Carbon\Carbon::parse('1944-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 13,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9755194768',
            'pozicia' => 'sestra', 'cislo_uctu' => "54352352351235", 'oddelenie_sestra_id' => 2, 
            'meno' => 'Ružena',
            'priezvisko' => 'Dobosiová',
            'mesto' => 'Lozorno',
            'psc' => '90055',
            'ulica_cislo' => 'Školská 24',
            'datum_narodenia' => \Carbon\Carbon::parse('1997-05-19'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 14,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9055163832',
            'pozicia' => 'sestra', 'cislo_uctu' => "54352352351235", 'oddelenie_sestra_id' => 2, 
            'meno' => 'Dobroslav',
            'priezvisko' => 'Galovič',
            'mesto' => 'Bratislava',
            'psc' => '85101',
            'ulica_cislo' => 'Osloboditeľov 222',
            'datum_narodenia' => \Carbon\Carbon::parse('1990-05-16'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 15,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '6554124533',
            'pozicia' => 'sestra', 'cislo_uctu' => "54352352351235", 'oddelenie_sestra_id' => 2, 
            'meno' => 'Tomáš',
            'priezvisko' => 'Durčák',
            'mesto' => 'Bidovce',
            'psc' => '04445',
            'ulica_cislo' => 'Užhorodská 306',
            'datum_narodenia' => \Carbon\Carbon::parse('1965-04-12'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 16,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '7353263863',
            'pozicia' => 'sestra', 'cislo_uctu' => "54352352351235", 'oddelenie_sestra_id' => 2,  'cislo_uctu' => "54352352351235", 'oddelenie_sestra_id' => 2, 
            'meno' => 'Petra',
            'priezvisko' => 'Eckerová',
            'mesto' => 'Bratislava',
            'psc' => '82107',
            'ulica_cislo' => 'Púpavová 77',
            'datum_narodenia' => \Carbon\Carbon::parse('1973-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 17,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9253266957',
            'pozicia' => 'doktor', 'cislo_uctu' => 459800000015939, 'uvazok' => 'plny', 'telefon' => '+421903535896', 'oddelenie_doktor_id' => 1,
            'meno' => 'Roman',
            'priezvisko' => 'Ember',
            'mesto' => 'Hrachovo',
            'psc' => '98052',
            'ulica_cislo' => 'Partizánska 56',
            'datum_narodenia' => \Carbon\Carbon::parse('1992-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 18,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9003262708',
            'pozicia' => 'doktor', 'cislo_uctu' => 459800000015939, 'uvazok' => 'plny', 'telefon' => '+421903535896', 'oddelenie_doktor_id' => 1,
            'meno' => 'Gabriel',
            'priezvisko' => 'Polakovič',
            'mesto' => 'Veľký Rur',
            'psc' => '93534',
            'ulica_cislo' => 'Poštová 26',
            'datum_narodenia' => \Carbon\Carbon::parse('1990-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 19,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '7853268577',
            'pozicia' => 'doktor', 'cislo_uctu' => 459800000015939, 'uvazok' => 'plny', 'telefon' => '+421903535896', 'oddelenie_doktor_id' => 1,
            'meno' => 'Filip',
            'priezvisko' => 'Daniš',
            'mesto' => 'Nové Zámky',
            'psc' => '94002',
            'ulica_cislo' => 'Stavbárska 286',
            'datum_narodenia' => \Carbon\Carbon::parse('1978-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 20,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '6908085327',
            'pozicia' => 'doktor', 'cislo_uctu' => 459800000015939, 'uvazok' => 'plny', 'telefon' => '+421903535896', 'oddelenie_doktor_id' => 1,
            'meno' => 'Erika',
            'priezvisko' => 'Gálová',
            'mesto' => 'Horné Lefantovce',
            'psc' => '95145',
            'ulica_cislo' => 'Janka Kráľa 97',
            'datum_narodenia' => \Carbon\Carbon::parse('1969-03-26'),
            'created_at' => \carbon\Carbon::now()->format('Y-m-d H:i:s')
        );

        DB::table('users')->insert($item); $cislo++;

        $item = array(
            'id' => $cislo,// 21,
            'email' => $cislo.'@email.com',
            'password' => bcrypt($cislo),
            'rodne_cislo' => '9803090012',
            'pozicia' => 'doktor', 'cislo_uctu' => 459800000015939, 'uvazok' => 'plny', 'telefon' => '+421903535896', 'oddelenie_doktor_id' => 1,
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