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
    //pri odstraneni timestampu z tabuliek
    //public $timestamps = false;


    public static function remove($instance){
        $instance->delete();
    }

    public static function create($user_id, $fillers){

        $zapis = true;

        $osoba = new Osoba();
        $osoba->user_id = $user_id;
        if (array_key_exists('pozicia', $fillers)){
            $osoba->typ_ulohy_id = Typ_ulohy::findId($fillers['pozicia']);
        }
        if (array_key_exists('name', $fillers)){
            $osoba->meno = $fillers['name'];
        }
        if (array_key_exists('priezvisko', $fillers)){
            $osoba->priezvisko = $fillers['priezvisko'];
        }

        if (array_key_exists('rodne_cislo', $fillers)){
            $osoba->rodne_cislo = $fillers['rodne_cislo'];
        }
        if (array_key_exists('mesto', $fillers)){
            $osoba->mesto = $fillers['mesto'];
        }
        if (array_key_exists('psc', $fillers)){
            $osoba->psc = $fillers['psc'];
        }
        if (array_key_exists('ulica_cislo_domu', $fillers)){
            $osoba->ulica_cislo = $fillers['ulica_cislo_domu'];
        }
        if (array_key_exists('stat', $fillers)){
            $osoba->stat = $fillers['stat'];
        }
        if (array_key_exists('datum_narodenia', $fillers)){
            $osoba->datum_narodenia = $fillers['datum_narodenia'];
        }

        $osoba->save();
    }

    public function typ_ulohy()
    {
        return $this->belongsTo(Typ_ulohy::class, 'typ_ulohy_id');
    }

    public function uloha(){
        switch ($this->typ_ulohy()->first()->getName()){
            case 'doktor':
                return $this->hasOne(Doktor::class, 'osoba_id');
                break;
            case 'sestra':
                return $this->hasOne(Sestra::class, 'osoba_id');
                break;
            case 'pacient':
                return $this->hasOne(Pacient::class, 'osoba_id');
                break;
            case 'prijemca':
                return $this->hasOne(Prijemca::class, 'osoba_id');
                break;
        }
    }

    public function login_data(){
        return $this->belongsTo(User::class, 'user_id');
    }


}
