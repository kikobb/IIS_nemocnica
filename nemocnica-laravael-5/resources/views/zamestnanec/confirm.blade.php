@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Údaje boli uložené</h2>


        <div>
            <div class="col-md-5">Meno:</div>
            <div class="col-md-6"> {{$osoba->meno}}</div>
        </div>

        <div>
            <div class="col-md-5">Priezvisko:</div>
            <div class="col-md-6"> {{$osoba->Priezvisko}}</div>
        </div>

        <div>
            <div class="col-md-5">Rodné číslo:</div>
            <div class="col-md-6"> {{$osoba->rodne_cislo}}</div>
        </div>

        <div>
            <div class="col-md-5">Pozícia:</div>
            <div class="col-md-6"> {{$osoba->Pozícia}}</div>
        </div>

        <div>
            <div class="col-md-5">Mesto:</div>
            <div class="col-md-6"> {{$osoba->mesto}}</div>
        </div>

        <div>
            <div class="col-md-5">PSČ:</div>
            <div class="col-md-6">{{$osoba->psc}} </div>
        </div>

        <div>
            <div class="col-md-5">Ulica a číslo domu:</div>
            <div class="col-md-6">{{$osoba->ulica_cislo_domu}} </div>
        </div>
        <div>
            <div class="col-md-5">Štát:</div>
            <div class="col-md-6">{{$osoba->stat}} </div>
        </div>

        <div>
            <div class="col-md-5">Dátum narodenia:</div>
            <div class="col-md-6">{{$osoba->datum_narodenia}} </div>
        </div>

        <div>
            <div class="col-md-5">Číslo účtu:</div>
            <div class="col-md-6">{{$osoba->cislo_uctu}} </div>
        </div>

        <div>
            <div class="col-md-5">Úväzok:</div>
            <div class="col-md-6">{{$osoba->uvazok}} </div>
        </div>

        <div>
            <div class="col-md-5">Telefón:</div>
            <div class="col-md-6">{{$osoba->telefon}} </div>
        </div>

    </div>

    <div class="col-sm-6 " id="confirm">

        <a href="zamestnanec/create" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-repeat"></span> Ďalšia registrácia
        </a>

        <a href="zamestnanec/index" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-home"></span> Domov
        </a>
    </div>

@endsection