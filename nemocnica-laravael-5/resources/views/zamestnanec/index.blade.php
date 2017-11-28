@extends('layouts.layout')

@section('content')

    <div class="col-sm-8 ">
        <h2>Moje údaje</h2>

        <div class="row">
            <div class="col-md-5">Meno:</div>
            <div class="col-md-6"> {{$currUser->meno}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Priezvisko:</div>
            <div class="col-md-6"> {{$currUser->priezvisko}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Rodné číslo:</div>
            <div class="col-md-6"> {{$currUser->rodne_cislo}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Pozícia:</div>
            <div class="col-md-6"> {{$currUser->pozicia}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Mesto:</div>
            <div class="col-md-6"> {{$currUser->mesto}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">PSČ:</div>
            <div class="col-md-6">{{$currUser->psc}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Ulica a číslo domu:</div>
            <div class="col-md-6">{{$currUser->ulica_cislo}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Štát:</div>
            <div class="col-md-6">{{$currUser->stat}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Dátum narodenia:</div>
            <div class="col-md-6">{{$currUser->datum_narodenia}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Číslo účtu:</div>
            <div class="col-md-6">{{$currUser->cislo_uctu}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Úväzok:</div>
            <div class="col-md-6">{{$currUser->uvazok}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Telefón:</div>
            <div class="col-md-6">{{$currUser->telefon}} </div>
        </div>
    </div>

@endsection