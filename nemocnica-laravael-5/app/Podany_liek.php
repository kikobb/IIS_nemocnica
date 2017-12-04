<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podany_liek extends Model
{
    protected $table = 'podane_lieky';

    public function getNazov(){
        return $this->liek()->nazov;
    }

    public function getCas(){
        return $this->cas;
    }

    public function getMnozstvo(){
        return $this->mnozstvo;
    }

    public function vysetrenie(){
        return $this->belongsTo('App\Vysetrenie');
    }

    public function liek(){
        return $this->belongsTo('App\Vysetrenie');
    }

}
