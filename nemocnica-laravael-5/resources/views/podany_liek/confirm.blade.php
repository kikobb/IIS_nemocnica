@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Údaje boli uložené</h2>

        <div class="row">
            <div class="col-md-5">Názov lieku:</div>
            <div class="col-md-6"> {{$podanyLiek->getNazov()}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Čas podávania:</div>
            <div class="col-md-6">{{$podanyLiek->getCas()}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Kontraindikácia:</div>
            <div class="col-md-6">{{$podanyLiek->getMnozstvo()}}</div>
        </div>


    </div>

    <div class="col-sm-6 " id="confirm">

        <a href="{{ route('create_podany_liek', $podanyLiek->id) }}" class="btn btn-info btn-lg">
            Ďalšia registrácia
        </a>

        <a href="{{ route('podanyLiek.edit', $podanyLiek->id) }}" class="btn btn-info btn-lg">
            Zmena údajov
        </a>

    </div>
@endsection