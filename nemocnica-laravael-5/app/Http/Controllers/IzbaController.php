<?php

namespace App\Http\Controllers;

use App\Izba;
use App\Oddelenie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IzbaController extends Controller
{
    function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('doktor')->except('create', 'show', 'index');
//        $this->middleware('sestricka')->only('create', 'show')->except('index');
    }

    /**
     * @return array
     */
    private function rules()
    {
        return [
            'typ' => 'required|string|max:20',
            'kapacita' => 'required|integer|max:255',
            'oddelenie' => 'required|string|max:60|exists:oddelenia,nazov',
            'cislo' => 'integer|max:65000',
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('izba.index')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'izby' => Izba::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('izba.createEdit')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'oddelenia' => Oddelenie::getAllNamesToArr(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $request->validate($this->rules());

        /* @var Izba $izba */
        $izba = Izba::create([
            'typ' => $request['typ'],
            'kapacita' => $request['kapacita'],
            'cislo' => $request['cislo'],
        ]);

        $odd_id = Oddelenie::getIdFromName($request['oddelenie']);
        //check ze ci exitstuje oddelenie
        if (is_numeric($odd_id)){
            $izba->oddelenie_id = $odd_id;
        }else{
            //ak nie tak vrat nastavene udaje na zadanie este raz
            return view('izba.createEdit')->with([
                'izba' => $izba,
            ]);
        }
        $izba->save();

        return $this->confirm($izba->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('izba.show')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'izba' => Izba::findOrFail($id),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function confirm($id)
    {
        return view('izba.confirm')->with([
            //-totodajprec-'currUser' => Auth::user(),
            "izba" => Izba::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('izba.createEdit')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'izba'  => Izba::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules());

        /* @var Izba $izba */
        $izba = Izba::findOrFail($id);
        $izba->typ = $request['typ'];
        $izba->kapacita = $request['kapacita'];
        $izba->cislo = $request['cislo'];

        //TODO skontroluj ci sa to neda cez validate
        $odd_id = Oddelenie::getIdFromName($request['oddelenie']);
        //check ze ci exitstuje oddelenie
        if (is_numeric($odd_id)){
            $izba->oddelenie_id = $odd_id;
        }else{
            //ak nie tak vrat nastavene udaje na zadanie este raz
            return view('izba.createEdit')->with([
                //-totodajprec-'currUser' => Auth::user(),
                'izba' => $izba,
            ]);
        }
        $izba->save();

        return $this->confirm($izba->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function destroy($id)
    {
        Izba::destroy($id);
        return back();
    }
}
