<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Typ_ulohy extends Model
{
    //nastavenie nie defaultneho spojenia k patricnej tabulke
    protected $table = 'typy_uloh';
    //pri odstraneni timestampu z tabuliek
    public $timestamps = false;

    public static function findId($str){
//        foreach (self::all() as $item){
//            retu
//        }
        return self::all()->where('nazov', $str)->first()->id;
    }

    public function osoby(){
        return $this->hasMany('Osoba', 'typ_ulohy_id');
    }

    public function getName(){
        return $this->nazov;
    }

}
