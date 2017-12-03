@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Liek</h2>

        <div class="row">
            <div class="col-md-5">Názov lieku:</div>
            <div class="col-md-5"> {{$liek->nazov}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Účinná látka:</div>
            <div class="col-md-5">{{$liek->ucinna_latka}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Kontraindikácia:</div>
            <div class="col-md-5">{{$liek->kontaindikacia}} </div>
        </div>

        <a href="{{ route('liek.edit', $liek->id) }}" class="btn btn-info btn-lg">
            Zmena údajov
        </a>
    </div>
@endsection