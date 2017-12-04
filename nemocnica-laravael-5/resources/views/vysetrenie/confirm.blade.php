@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Úspešne uložené</h2>

        <div class="row">
            <div class="col-md-5">Doktor:</div>
            <div class="col-md-6">{{''.$vysetrenie->getDoktor()->priezvisko.' '.$vysetrenie->getDoktor()->meno}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Pacient:</div>
            <div class="col-md-6">{{''.$vysetrenie->getPacient()->priezvisko.' '.$vysetrenie->getPacient()->meno}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Oddelenie:</div>
            <div class="col-md-6">{{$vysetrenie->getOddelenie()->nazov}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Typ vyšetrenia:</div>
            <div class="col-md-6"> {{$vysetrenie->typ}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Dátum a čas:</div>
            <div class="col-md-6">{{$vysetrenie->created_at}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Správa:</div>
            <div class="col-md-6">{{$vysetrenie->sprava}} </div>
        </div>


    </div>

    <div class="col-sm-6 " id="confirm">

        <a href="{{ route('vysetrenie.create', $vysetrenie->id) }}" class="btn btn-info btn-lg">
            Ďalšia registrácia
        </a>

        <a href="{{ route('vysetrenie.edit', $vysetrenie->id) }}" class="btn btn-info btn-lg">
            Zmena údajov
        </a>

        <a href="{{ route('create_podany_liek', $vysetrenie->id) }}" class="btn btn-info btn-lg">
            Pridať liek
        </a>

    </div>
@endsection