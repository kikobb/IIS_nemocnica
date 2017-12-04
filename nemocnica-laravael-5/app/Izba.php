<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Izba extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'izby';

//    public static function create($fillers){
//        $izba = new Izba();
//
//        $izba->oddelenie_id = Oddelenie::getIdFromName($fillers['oddelenie']);
//
//        if (array_key_exists('typ', $fillers)){
//            $izba->typ = $fillers['typ'];
//        }
//        if (array_key_exists('kapacita', $fillers)){
//            $izba->kapacita = $fillers['kapacita'];
//        }
//        if (array_key_exists('cislo', $fillers)){
//            $izba->cislo = $fillers['cislo'];
//        }
//
//        $izba->save();
//    }

    public static function getIzbaIdByNumber($nmbr){
        $pom = Izba::where('cislo', $nmbr)->first();
        return $pom->id;
    }

    public static function getIzbaByNumber($numbr) {
        return Izba::where('cislo', '=', $numbr);
    }

    public static function getIzbyByKapacita($kap) {
        return Izba::where('kapacita', '=', $kap);
    }

    public static function getIzbaByTyp($typ) {
        return Izba::where('typ', '=', $typ);
    }


    public function getPobytyOnIzbaToArr(){
        $arr = Array();
        foreach($this->pobyty()->get() as $pobyt){
            $arr[] = $pobyt;
        }
        return $arr;
    }

    public function getMyOddelenie(){
        return $this->oddelenie()->first()->getName();
    }

    public function oddelenie(){
        return $this->belongsTo('App\Oddelenie');
    }

    public function pobyty(){
        return $this->hasMany('App\Pobyt');
    }

}
