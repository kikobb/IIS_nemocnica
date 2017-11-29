@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Vyšetrenie</h2>

        <div class="row">
            <div class="col-md-5">Doktor:</div>
            <div class="col-md-6">{{$vysetrenie->doktor}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Pacient:</div>
            <div class="col-md-6">{{$vysetrenie->pacient}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Oddelenie:</div>
            <div class="col-md-6">{{$vysetrenie->oddelenie}} </div>
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

        <a href="/vysetrenie/create" class="btn btn-info btn-lg">
            Ďalšia registrácia
        </a>

        <a href="{{ route('vysetrenie.edit', $vysetrenie->id) }}" class="btn btn-info btn-lg">
            Zmena údajov
        </a>

    </div>
@endsection