<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Liek;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LiekController extends Controller
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
            'nazov' => 'required|max:50',
            'ucinna_latka' => 'required|max:255'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        //vrata view s liekmi
        return view('liek.index')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'lieky' => Liek::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('liek.createEdit')->with([
            //-totodajprec-'currUser' => Auth::user(),
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

        /* @var Liek $liek */
//        dd($request);
        $liek = Liek::create([
            'nazov' => $request['nazov'],
            'ucinna_latka' => $request['ucinna_latka'],
        ]);

        if ( $request->has('kontraindikacia') )
            $liek->kontraindikacia = $request['kontraindikacia'];

        $liek->save();

        return $this->confirm($liek->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('liek.show')->with([
            //-totodajprec-'currUser' => Auth::user(),
            "liek" => Liek::findOrFail($id),
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
        return view('liek.confirm')->with([
            //-totodajprec-'currUser' => Auth::user(),
            "liek" => Liek::findOrFail($id),
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
        return view('liek.createEdit')->with([
            //-totodajprec-'currUser' => Auth::user(),
            'liek' => Liek::findOrFail($id),
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

        /* @var Liek $liek */
        $liek = Liek::findOrFail($id);
        $liek->nazov = $request['nazov'];
        $liek->ucinna_latka = $request['ucinna_latka'];

        if ( $request->has('kontraindikacia') )
            $liek->kontraindikacia = $request['kontraindikacia'];

        $liek->save();

        return $this->confirm($liek->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Liek::destroy($id);
        return back();
    }
}
