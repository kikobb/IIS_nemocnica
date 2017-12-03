@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Údaje boli uložené</h2>

        <div class="row">
            <div class="col-md-5">Názov oddelenia:</div>
            <div class="col-md-6"> {{$oddelenie->nazov}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Účinná látka:</div>
            <div class="col-md-6">{{$oddelenie->poschodie}} </div>
        </div>

    </div>

    <div class="col-sm-6 " id="confirm">


        <a href="{{ route('oddelenie.create', $oddelenie->id) }}" class="btn btn-info btn-lg">
            Ďalšia registrácia
        </a>

        <a href="{{ route('oddelenie.edit', $oddelenie->id) }}" class="btn btn-info btn-lg">
            Zmena údajov
        </a>

    </div>
@endsection