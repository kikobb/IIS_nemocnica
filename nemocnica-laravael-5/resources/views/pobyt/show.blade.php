@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2>Pobyt</h2>

        <div class="row">
            <div class="col-md-5">Pacient:</div>
            <div class="col-md-6"> {{''.$pobyt->getPacient()->priezvisko.' '.$pobyt->getPacient()->meno}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Doktor:</div>
            <div class="col-md-6"> {{''.$pobyt->getDoktor()->priezvisko.' '.$pobyt->getDoktor()->meno}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Príjemca:</div>
            <div class="col-md-6"> {{''.$pobyt->getPrijemca()->priezvisko.' '.$pobyt->getPrijemca()->meno}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Dátum príchodu:</div>
            <div class="col-md-6">{{$pobyt->datum_prichodu}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Dátum odchodu:</div>
            <div class="col-md-6">{{$pobyt->datum_odchodu}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Izba:</div>
            <div class="col-md-6">{{$pobyt->getIzba()->cislo}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Oddelenie:</div>
            <div class="col-md-6">{{$pobyt->getIzba()->getMyOddelenie()}}</div>
        </div>
    </div>

    @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra' || $currUser->pozicia == 'prijemca')
        <div class="col-sm-6 " id="confirm">


            <a href="{{ route('pobyt.edit', $pobyt->id) }}" class="btn btn-info btn-lg">
                Zmena údajov
            </a>

        </div>
    @endif

@endsection