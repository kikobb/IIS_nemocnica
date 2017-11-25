<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liek extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'lieky';

    public function podane_lieky(){
        return $this->hasMany('App\Podany_liek');
    }

}
