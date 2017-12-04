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
        $this->middleware('auth');
        $this->middleware('admin')->except('index');
    }

    /**
     * @return array
     */
    private function rules()
    {
        return [
            'typ' => 'required|string|max:20',
            'kapacita' => 'required|integer|max:255',
            'oddelenie_id' => 'required|integer',
            'cislo' => 'required|integer|max:65000|unique:izby,cislo',
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
            'currUser' => Auth::user(),
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
            'currUser' => Auth::user(),
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
        $izba = new Izba();
        $izba->typ = $request['typ'];
        $izba->kapacita = $request['kapacita'];
        $izba->cislo = $request['cislo'];
        //pozor +1 lebo vo frontende sa vracia hodnota od 0 ale v tabulke sa indexuje od 1
        $izba->oddelenie_id = $request['oddelenie']+1;
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
            'currUser' => Auth::user(),
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
            'currUser' => Auth::user(),
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
            'currUser' => Auth::user(),
            'izba'  => Izba::findOrFail($id),
            'oddelenia' => Oddelenie::getAllNamesToArr(),
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

        //pozor +1 lebo vo frontende sa vracia hodnota od 0 ale v tabulke sa indexuje od 1
        $izba->oddelenie_id = $request['oddelenie']+1;
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
        return view('uspesne_vymazane')->with([
            'currUser' => Auth::user(),
        ]);
    }
}
