<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podany_liek extends Model
{
    protected $table = 'podane_lieky';

    public function getNazov(){
        return $this->liek()->first()->nazov;
    }

    public function getCas(){
        return $this->cas;
    }

    public function getMnozstvo(){
        return $this->mnozstvo;
    }


    public function vysetrenie(){
        return $this->belongsTo(Vysetrenie::class);
    }

    public function liek(){
        return $this->belongsTo(Liek::class, 'liek_id', 'id');
    }

}
