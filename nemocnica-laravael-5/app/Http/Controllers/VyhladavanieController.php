<?php

namespace App\Http\Controllers;

use App\Izba;
use App\Liek;
use App\Oddelenie;
use App\Pobyt;
use App\User;
use App\Vysetrenie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class VyhladavanieController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('admin')->except('index', 'show');
    }

    private function findPersonal(Request $request){
        //vybre users len s patricnou rolou
        $pom = User::findAllUsersByPozicia($request['cat_1']);
        if ($request['cat_2'] == 'meno')
            $ret = $pom->findUsersByMeno($request['vyhladavanie']);
        if ($request['cat_2'] == 'priezvisko') {
            $ret = $pom->findUsersByPriezvisko($request['vyhladavanie']);
        }
        //iab pri doktoroch a sestrach
        if ($request['cat_1'] == 'doktor') {
            if ($request['cat_2'] == 'oddelenie') {
                $ret = $pom->findDoktorByOddelenie($request['vyhladavanie']);
            }
        }elseif ($request['cat_1'] == 'sestra'){
            if ($request['cat_2'] == 'oddelenie') {
                $ret = $pom->findSestraByOddelenie($request['vyhladavanie']);
            }
        }

        return view('zamestnanec.founded')->with([
            'currUser' => Auth::user(),
            'osoby' => (!isset($ret) || $ret == null)? null : $ret->get(),
        ]);
    }

    private function findPacient(Request $request) {
        //vybre users len s patricnou rolou
        $pom = User::findAllUsersByPozicia($request['cat_1']);

        if ($request['cat_2'] == 'meno')
            $ret = $pom->findUsersByMeno($request['vyhladavanie']);
        if ($request['cat_2'] == 'priezvisko') {
            $ret = $pom->findUsersByPriezvisko($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'rodne_cislo') {
            $ret = $pom->findPacientByRodneCislo($request['vyhladavanie']);
        }
        return view('pacient.founded')->with([
            'currUser' => Auth::user(),
            'pacienti' => (!isset($ret) || $ret == null)? null : $ret->get(),
        ]);
    }

    private function findLiek(Request $request){//nazov ucinna latka
        if ($request['cat_2'] == 'nazov'){
            $ret = Liek::getLiekyByNazov($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'latka'){
            $ret = Liek::getLiekyByUcinnaLatka($request['vyhladavanie']);
        }
        return view('liek.founded')->with([
            'currUser' => Auth::user(),
            'lieky' => (!isset($ret) || $ret == null)? null : $ret->get(),
        ]);
    }

    private function findOddelenie(Request $request){//nazov poschodie
        if ($request['cat_2'] == 'nazov') {
            $ret = Oddelenie::getOddelenieByNazov($request['vyhladavanie']);
        }

        if ($request['cat_2'] == 'poschodie') {
            $ret = Oddelenie::getOddeleniaByPOschodie($request['vyhladavanie']);
        }

        return view('oddelenie.founded')->with([
            'currUser' => Auth::user(),
            'oddelenia' => (!isset($ret) || $ret == null)? null : $ret->get(),
        ]);
    }

    private function findIzba(Request $request){//typ kapacita cislo
        if ($request['cat_2'] == 'typ') {
            $ret = Izba::getIzbaByTYp($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'kapacita') {
            $ret = Izba::getIzbyByKapacita($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'cislo') {
            $ret = Izba::getIzbaByNumber($request['vyhladavanie']);
        }

        return view('izba.founded')->with([
            'currUser' => Auth::user(),
            'izby' => (!isset($ret) || $ret == null)? null : $ret->get(),
        ]);
    }

    private function findPobyt(Request $request){//od do oddelenie pacient rod c
        if ($request['cat_2'] == 'datum_prichodu'){
            $ret = Pobyt::getPobytyByDatumPrichodu($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'datum_odchodu'){
            $ret = Pobyt::getPobytyByDatumOdchodu($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'oddelenie') {
            $ret = Oddelenie::getPobytyByOddelenie($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'rodne_cislo'){
            $ret = User::getUserByRodneCislo($request['vyhladavanie']);
            if ($ret != null)
                $ret = $ret->getPobyty();
        }

        return view('pobyt.founded')->with([
            'currUser' => Auth::user(),
            'pobyty' => (!isset($ret) || $ret == null)? null : $ret,
        ]);
    }

    private function findVysetrenie(Request $request){//typ datum oddelenie
        if ($request['cat_2'] == 'typ') {
            $ret = Vysetrenie::getVysetreniaByTyp($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'datum') {
            $ret = Vysetrenie::getVysetreniaByDatum($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'oddelenie') {
            $ret = Vysetrenie::getVysetrenieByOddelenie($request['vyhladavanie']);
        }

        return view('vysetrenie.founded')->with([
            'currUser' => Auth::user(),
            'vysetrenia' => (!isset($ret) || $ret == null)? null : $ret->get(),
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('vyhladanie')->with([
            'currUser' => Auth::user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function store(Request $request)
    {
        switch ($request['cat_1']){
            case 'doktor':
            case 'sestra':
            case 'prijemca':
                return $this->findPersonal($request);
                break;
            case 'pacient'://meno priez rodne cislo
                return $this->findPacient($request);
            case 'liek':
                return $this->findLiek($request);
                break;
            case 'oddelenie':
                return $this->findOddelenie($request);
                break;
            case 'izba':
                return $this->findIzba($request);
                break;
            case 'pobyt':
                return $this->findPobyt($request);
                break;
            case 'vysetrenie':
                return $this->findVysetrenie($request);
                break;
        }
        return back();  //ak posle nahodou zly argument
    }
}
