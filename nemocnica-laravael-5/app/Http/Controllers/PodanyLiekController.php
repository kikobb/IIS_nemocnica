<?php

namespace App\Http\Controllers;

use App\Liek;
use App\Podany_liek;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;


class PodanyLiekController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
//        $this->middleware('doktor')->except('index', 'show');
//        $this->middleware('doktorSestraPacientIndChck')->only('show');
        //show pre vsetkych aby si aj pacient mohol pozret
    }

    /**
     * @return array
     */
    private function rules()
    {
        return [
            'cas' => 'required|string|max:50',
            'mnozstvo' => 'required|string|max:255'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
//        return view('podanyLiek.index')->with([
//            'currUser' => Auth::user(),
//            'podane_lieky'  => Podany_liek::all(),
//        ]);
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
//        return view('podanyLiek.createEdit')->with([
//            'currUser' => Auth::user(),
//            'lieky' => Liek::getAllLiekyToArr(),
//        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function createCustom($id)
    {
        return view('podany_liek.createEdit')->with([
            'currUser' => Auth::user(),
            'lieky' => Liek::getAllLiekyToArr(),
            'vysetrenie_id' => $id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function storeCustom(Request $request, $id)
    {
        $request->validate($this->rules());

        /* @var Podany_liek $pliek */
        $pliek = new Podany_liek();
        $pliek->liek_id = $request['liek_id'];
//         $pliek->vysetrenie_id = $request['vysetrenie_id'];
        $pliek->vysetrenie_id = $id;
        $pliek->cas = $request['cas'];
        $pliek->mnozstvo = $request['mnozstvo'];
        $pliek->save();

        return $this->confirm($pliek->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function store(Request $request)
    {
//        $request->validate($this->rules());
//
//        /* @var Podany_liek $pliek */
//        $pliek = new Podany_liek();
//         $pliek->liek_id = $request['liek_id'];
//         $pliek->vysetrenie_id = $request['vysetrenie_id'];
////        $pliek->vysetrenie_id = $id;
//         $pliek->cas = $request['cas'];
//         $pliek->mnozstvo = $request['mnozstvo'];
//        $pliek->save();
//
//        return $this->confirm($pliek->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('podany_liek.show')->with([
            'currUser' => Auth::user(),
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
        return view('podany_liek.confirm')->with([
            'currUser' => Auth::user(),
            'podanyLiek' => Podany_liek::findOrFail($id),
            'lieky' => Liek::getAllLiekyToArr(),
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
        return view('podany_liek.createEdit')->with([
            'currUser' => Auth::user(),
            'podanyLiek' => Podany_liek::findOrFail($id),
            'lieky' => Liek::getAllLiekyToArr(),
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
        $pliek->liek_id = $request['liek_id'];
        $pliek->vysetrenie_id = $request['vysetrenie_id'];
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
        return view('uspesne_vymazane')->with([
            'currUser' => Auth::user(),
        ]);
    }
}
