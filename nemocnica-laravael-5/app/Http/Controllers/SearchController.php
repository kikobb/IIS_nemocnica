<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vyhladavanie');
    }

    public function find(Request $request){

    }

    private function rola(){
        $user = User::getUserById(Auth::user()->id);
        return $user->osoba()->first()->typ_ulohy()->first()->getName();
    }
}
