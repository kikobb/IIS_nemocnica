<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Doktor extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'doktori';

    /**
     * @param string
     * @return array of App\Osoba
     */
    public static function getDoktorsByMeno($meno){
        $osoby = App\Osoba::where('meno', 'like', "%".$meno."%")->get();
        foreach ($osoby as $osoba){
            if ($osoba->Typ_ulohy()->first()->nazov == 'doktor'){
                $result[] = $osoba;
            }
        }
        return $result;
    }

    /**
     * @param string
     * @return array of App\Osoba
     */
    public static function getDoktorByPriezvisko($priezvisko){
        $osoby = App\Osoba::where('priezvisko', $priezvisko)->get();
        foreach ($osoby as $osoba){
            if ($osoba->Typ_ulohy()->first()->nazov == 'doktor'){
                $result[] = $osoba;
            }
        }
        return $result;
    }

    /**
     * @param string
     * @return array of App\Osoba
     */
    public static function getDoktorByOddelenie($nazov){
        $id_oddelenia = \App\Oddelenie::getIdFromName($nazov);
        foreach ( self::all() as $doktor){
            if ($doktor->oddelenie_id == $id_oddelenia){
                $result[] = $doktor->osoba()->first();
            }
        }
        return $result;
    }

    public static function remove($instance){
        $instance->delete();
    }

    public static function create($osoba_id, $fillers){
        $doktor = new Doktor();

        $doktor->osoba_id = $osoba_id;
        if (array_key_exists('uvazok', $fillers)){
            $doktor->uvazok = $fillers['uvazok'];
        }
        if (array_key_exists('cislo_uctu', $fillers)){
            $doktor->cislo_uctu = $fillers['cislo_uctu'];
        }
        if (array_key_exists('telefon', $fillers)){
            $doktor->telefon = $fillers['telefon'];
        }
        if (array_key_exists('oddelenie_id', $fillers)){
            $doktor->oddelenie_id = $fillers['oddelenie_id'];
        }

        $doktor->save();
    }

    public function osoba(){
        return $this->belongsTo(Osoba::class, 'osoba_id');
    }

    public function vysetrenia(){
        return $this->hasMany(Vysetrenie::class);
    }

    public function oddelenie(){
        return $this->belongsTo(Oddelenie::class);
    }

    public function pobyty(){
        return $this->hasMany(Pobyt::class);
    }

}
