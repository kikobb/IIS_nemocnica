@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Pacient</h2>

        <div class="row">
            <div class="col-md-5">Názov lieku:</div>
            <div class="col-md-6"> {{$osoba->meno}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Účinná látka:</div>
            <div class="col-md-6">{{$osoba->priezvisko}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Kontraindikácia:</div>
            <div class="col-md-6">{{$osoba->email}} </div>
        </div>
    </div>
@endsection