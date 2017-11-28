@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Údaje boli uložené</h2>

        <div>
            <div class="col-md-5">Názov lieku:</div>
            <div class="col-md-6"> {{$liek->nazov}}</div>
        </div>

        <div>
            <div class="col-md-5">Účinná látka:</div>
            <div class="col-md-6">{{$liek->ucinna_latka}} </div>
        </div>

        <div>
            <div class="col-md-5">Kontraindikácia:</div>
            <div class="col-md-6"> @if($liek->kontraindikacia) {{$liek->kontraindikacia}} @else  @endif </div>
        </div>


    </div>

    <div class="col-sm-6 " id="confirm">

        <a href="izba/create" class="btn btn-info btn-lg">
            Ďalšia registrácia
        </a>

        <a href="home_admin" class="btn btn-info btn-lg">
            Zmena údajov
        </a>

    </div>
@endsection