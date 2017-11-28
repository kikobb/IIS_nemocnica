<?php

namespace App\Http\Controllers;

use App\Liek;
use App\Podany_liek;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;


class PodanyLiekController extends Controller
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
//            'nazov' => 'required|max:50',
//            'ucinna_latka' => 'required|max:255'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('podanyLiek.index')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'podane_lieky'  => Podany_liek::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('podanyLiek.createEdit')->with([
            //-totodajprec-'currUser' => Auth::user(),
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
        $request->validate($this->rules());

        /* @var Podany_liek $pliek */
        $pliek = Podany_liek::create([
            'cas' => $request['cas'],
            'mnozstvo' => $request['mnozstvo'],
        ]);

        //Todo skontroluj ci to odchiti cez validate
        if ($request->has('liek')){
            $pliek->liek_id = Liek::getIdFromName($request['liek']);
        }
        if ($request->has('vysetrenie_id')){
            $pliek->vysetrenie_id = $request['vysetrenie_id'];
        }
        $pliek->save();

        return $this->confirm($pliek->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('podanyLiek.show')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'podanyLiek' => Podany_liek::findOrFail($id),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function confirm($id)
    {
        return view('podanyLiek.confirm')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'podanyLiek' => Podany_liek::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        return view('podanyLiek.createEdit')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'podanyLiek' => Podany_liek::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return View
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules());

        /* @var Podany_liek $pliek */
        $pliek = Podany_liek::findOrFail($id);
        $pliek->cas = $request['cas'];
        $pliek->nmozstvo = $request['mnozstvo'];

        //Todo skontroluj ci to odchiti cez validate
        if ($request->has('liek')){
            $pliek->liek_id = Liek::getIdFromName($request['liek']);
        }
        if ($request->has('vysetrenie_id')){
            $pliek->vysetrenie_id = $request['vysetrenie_id'];
        }
        $pliek->save();

        return $this->confirm($pliek->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Podany_liek::destroy($id);
        return back();
    }
}
