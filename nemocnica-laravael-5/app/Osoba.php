<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Osoba extends Model
{
    //nastavenie nie defaultneho spojenia k patricnej tabulke
    protected $table = 'osoby';
    //nastavenie nie defaultneho PK
    protected $primaryKey ='id_rodne_cislo';
    //nastavenie dat typu prim kluca (nie default)
    public $incrementing = false;
    protected $keyType = 'bigIteger';
    //toto hore ^^^^^ mozno netreba ak sa to berie ako int
    //format datumtu a casu
    protected $dateFormat = 'd.m.Y H:i:s';
    //pri odstraneni timestampu z tabuliek
    //public $timestamps = false;


    public function typ_ulohy()
    {
        return $this->belongsTo('App\Typ_ulohy', 'typ_ulohy_id');
    }

    public function uloha(){
        switch ($this->typ_ulohy()->first()->getName()){
            case 'doktor':
                return $this->hasMany('App\Doktor', 'osoba_id_rodne_cislo');
                break;
            case 'sestra':
                return $this->hasMany('App\Sestra', 'osoba_id_rodne_cislo');
                break;
            case 'pacient':
                return $this->hasMany('App\Pacient', 'osoba_id_rodne_cislo');
                break;
            case 'prijemca':
                return $this->hasMany('App\Prijemca', 'osoba_id_rodne_cislo');
                break;
        }
    }


}
