@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2> Zamestnanec</h2>


        <div class="row">
            <div class="col-md-5">Meno:</div>
            <div class="col-md-6"> {{$osoba->meno}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Priezvisko:</div>
            <div class="col-md-6"> {{$osoba->priezvisko}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Rodné číslo:</div>
            <div class="col-md-6"> {{$osoba->rodne_cislo}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Pozícia:</div>
            <div class="col-md-6"> {{$osoba->pozicia}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Mesto:</div>
            <div class="col-md-6"> {{$osoba->mesto}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">PSČ:</div>
            <div class="col-md-6">{{$osoba->psc}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Ulica a číslo domu:</div>
            <div class="col-md-6">{{$osoba->ulica_cislo}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Štát:</div>
            <div class="col-md-6">{{$osoba->stat}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Dátum narodenia:</div>
            <div class="col-md-6">{{$osoba->datum_narodenia}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Číslo účtu:</div>
            <div class="col-md-6">{{$osoba->cislo_uctu}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Úväzok:</div>
            <div class="col-md-6">{{$osoba->uvazok}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Telefón:</div>
            <div class="col-md-6">{{$osoba->telefon}} </div>
        </div>

        <a href="{{ route('zamestnanec.edit', $osoba->id) }}" class="btn btn-info btn-lg">
            Zmena údajov
        </a>

    </div>
@endsection