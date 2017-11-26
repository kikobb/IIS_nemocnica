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

    public static function getIdFromName($name){
        $pom = Typ_ulohy::where('nazov', $name)->first();
        return $pom->id;
    }

    public function osoby(){
        return $this->hasMany('Osoba', 'typ_ulohy_id');
    }

    public function getName(){
        return $this->nazov;
    }

}
