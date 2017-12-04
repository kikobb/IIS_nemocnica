<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oddelenie extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'oddelenia';

//    public static function create($fillers){
//        $oddelenie = new Oddelenie();
//        if (array_key_exists('nazov', $fillers)){
//            $oddelenie->nazov = $fillers['nazov'];
//        }
//        if (array_key_exists('poschodie', $fillers)){
//            $oddelenie->poschodie = $fillers['poschodie'];
//        }
//        $oddelenie->save();
//    }

    public static function getIdFromName($name){
        $pom = Oddelenie::where('nazov', $name)->first();
        return $pom->id;
    }

    public static function getAllNamesToArr(){
        return Oddelenie::pluck('nazov')->toArray();
    }

    public static function getOddelenieByNazov($nazov) {
        return Oddelenie::where('nazov', '=', $nazov);
    }

    public static function getOddeleniaByPoschodie($poschodie) {
        return Oddelenie::where('poschodie', '=', $poschodie);
    }

    public static function getPobytyByOddelenie($oddelenie){
        $pobyty = Array();
        foreach (Oddelenie::getOddelenieByNazov($oddelenie)->first()->izby()->get() as $izba){
           $pobyty = array_merge($pobyty, $izba->getPobytyOnIzbaToArr());
        }
        return $pobyty;
    }


    public function getName(){
        return $this->nazov;
    }

    //vazby
    public function doktori()
    {
        return $this->hasMany(User::class, 'oddelenie_doktor_id', 'id');
    }

    public function sestry()
    {
        return $this->hasMany(User::class, 'oddelenie_sestra_id', 'id');
    }

    public function vysetrenia()
    {
        return $this->hasMany(Vysetrenie::class);
    }

    public function izby()
    {
        return $this->hasMany(Izba::class);
    }



}
