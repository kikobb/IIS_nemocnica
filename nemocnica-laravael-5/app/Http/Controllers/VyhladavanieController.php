<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class VyhladavanieController extends Controller
{

    function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('admin')->except('index', 'show');
    }

    private function findDoktor(Request $request){
        $ret = User::first();
//        dump($ret);
        if ($request['cat_2'] == 'meno')
            $ret = $ret->findUsersByMeno($request['vyhladavanie']);
        if ($request['cat_2'] == 'priezvisko') {
            $ret = $ret->findUsersByPriezvisko($request['vyhladavanie']);
        }
        if ($request['cat_2'] == 'oddelenie') {
            $ret = $ret->findDoktorByOddelenie($request['vyhladavanie']);
        }
//        dd($ret->get());
        return view('zamestnanec.founded')->with([
            'currUser' => Auth::user(),
            'osoby' => $ret->get()->toArray(),
        ]);
    }

    private function findSestra(Request $request){

    }

    private function findPrijemca(Request $request){

    }

    private function findLiek(Request $request){

    }

    private function findOddelenie(Request $request){

    }

    private function findIzba(Request $request){

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
                return $this->findDoktor($request);
                break;
            case 'sestra':
                return $this->findSestra($request);
                break;
            case 'prijemca':
                return $this->findPrijemca($request);
                break;
            case 'liek':
                return $this->findLiek($request);
                break;
            case 'oddelenie':
                return $this->findOddelenie($request);
                break;
            case 'izba':
                return $this->findIzba($request);
                break;
        }
        return back();  //ak posle nahodou zly argument
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
