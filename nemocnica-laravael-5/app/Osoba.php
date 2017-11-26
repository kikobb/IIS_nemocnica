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
