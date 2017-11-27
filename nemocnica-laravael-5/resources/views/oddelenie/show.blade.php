@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Oddelenie</h2>

        <div>
            <div class="col-md-5">Názov oddelenieu:</div>
            <div class="col-md-6"> {{$oddelenie->nazov}}</div>
        </div>

        <div>
            <div class="col-md-5">Účinná látka:</div>
            <div class="col-md-6">{{$oddelenie->Poschodie}} </div>
        </div>

    </div>
@endsection