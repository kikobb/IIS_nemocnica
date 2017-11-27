@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Údaje boli uložené</h2>


        <div>
            <div class="col-md-5">Názov lieku:</div>
            <div class="col-md-6"> {{$osoba->meno}}</div>
        </div>

        <div>
            <div class="col-md-5">Účinná látka:</div>
            <div class="col-md-6">{{$osoba->priezvisko}} </div>
        </div>

        <div>
            <div class="col-md-5">Kontraindikácia:</div>
            <div class="col-md-6">{{$osoba->email}} </div>
        </div>



        <a href="zamestnanec/create" class="btn btn-info btn-lg">
            <span type="submit" class="glyphicon glyphicon-repeat"></span> Ďalšia registrácia
        </a>

        <a href="zamestnanec/index" class="btn btn-info btn-lg">
            <span type="submit" class="glyphicon glyphicon-home"></span> Domov
        </a>
    </div>

@endsection