<?php

namespace App;

use Illuminate\Database\Query\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public static function remove($instance){
        $instance->delete();
    }

    public static function getUserById($id){
        return User::where('id', $id)->first();
    }

    public static function getUserByRodneCislo($rcislo){
        return User::where('rodne_cislo', $rcislo)->first();
    }

    public static function getFullNamesOnPoziciaToArr($poz){
        $users = User::where('pozicia', '=', $poz)->get();
        $result = Array();
        foreach ($users as $user){
            $result[] = $user->priezvisko." ".$user->meno;
        }
        return $result;
    }

    public static function scopeFindAllUsersByPozicia($query, $poz){
        return $query->where('pozicia', '=', $poz);
    }

    public function scopeFindUsersByMeno($query, $meno){
        return $query->where('meno', '=', $meno);
    }

    public function scopeFindUsersByPriezvisko($query, $priezvisko){
        return $query->where('priezvisko', '=', $priezvisko);
    }

    public static function scopeFindDoktorByOddelenie($query, $oddelenie){
        return $query->where('oddelenie_doktor_id', '=', $oddelenie);
    }

    public static function scopeFindSestaByOddelenie($query, $oddelenie){
        return $query->where('oddelenie_sestra_id', '=', $oddelenie);
    }

    /** vracia pole podanych likov pre pacienta inak prazdne pole */
    public function getPacientVsetkyPodaneLieky(){
        $arr = Array();
        if ($this->pozicia != 'pacient') {
            return $arr;
        }

        foreach ($this->vysetrenie()->get() as $vysetrenie) {
            $arr = array_merge($arr, $vysetrenie->getPodaneLiekyArr());
        }

        return $arr;
    }

    public function getVysetrenia(){
        return $this->vysetrenie()->get();
    }

    public function getPobyty(){
        return $this->pobyt()->get();
    }



    /**
     * @param $query Builder
     * @param $meno
     */
    public function scopeDoctorFilterByName($query, $meno)
    {
        $query->where('pozicia', '=', 'doktor')->where('meno', 'like', '%'.$meno.'%');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //väzba


    public function isAdmin() {
        return ($this->pozicia == 'admin');
    }

    public function isDoktor(){
        return ($this->pozicia == 'doktor');
    }

    public function isSestra(){
        return ($this->pozicia == 'sestra');
    }

    public function isPrijemca(){
        return ($this->pozicia == 'prijemca');
    }

    public function isPacient(){
        return ($this->pozicia == 'pacient');
    }


    public function pobyt(){
        switch ($this->pozicia){
            case 'doktor':
                return $this->hasMany(Pobyt::class, 'doktor_id', 'id');
                break;
            case 'prijemca':
                return $this->hasMany(Pobyt::class, 'prijemca_id', 'id');
                break;
            case 'pacient':
                return $this->hasMany(Pobyt::class, 'pacient_id', 'id');
                break;
            default : return null;
        }
    }

    public function vysetrenie(){
        switch ($this->pozicia){
            case 'doktor':
                return $this->hasMany(Vysetrenie::class, 'doktor_id', 'id');
                break;
            case 'pacient':
                return $this->hasMany(Vysetrenie::class, 'pacient_id', 'id');
                break;
            default : return null;
        }
    }

    public function oddelenie(){
        switch ($this->pozicia){
            case 'doktor':
                return $this->belongsTo(Oddelenie::class, 'oddelenie_doktor_id', 'id');
                break;
            case 'sestra':
                return $this->belongsTo(Oddelenie::class, 'oddelenie_doktor_id', 'id');
                break;
            default: return null;
        }
    }

}
