@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Liek</h2>

        <div>
            <div class="col-md-5">Názov lieku:</div>
            <div class="col-md-5"> {{$liek->nazov}}</div>
        </div>

        <div>
            <div class="col-md-5">Účinná látka:</div>
            <div class="col-md-5">{{$liek->ucinna_latka}} </div>
        </div>

        <div>
            <div class="col-md-5">Kontraindikácia:</div>
            <div class="col-md-5">{{$liek->kontaindikacia}} </div>
        </div>
    </div>
@endsection