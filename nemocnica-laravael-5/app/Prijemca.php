<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prijemca extends Model
{
    protected $table = 'prijemcovia';

    public function osoba(){
        return $this->belongsTo('App\Osoba', 'osoba_id_rodne_cislo');
    }

    public function pobyt(){
        return $this->hasMany('App\Pobyt');
    }

}
