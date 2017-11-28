@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Vyšetrenie</h2>

        <div>
            <div class="col-md-5">Typ vyšetrenia:</div>
            <div class="col-md-5"> {{$vysetrenie->typ}}</div>
        </div>

        <div>
            <div class="col-md-5">Dátum a čas:</div>
            <div class="col-md-5">{{$vysetrenie->created_at}} </div>
        </div>


    </div>

    <div class="col-sm-6 " id="confirm">

        <a href="izba/create" class="btn btn-info btn-lg">
            Pridať liek
        </a>

        <a href="home_admin" class="btn btn-info btn-lg">
            Zmena údajov
        </a>

    </div>
@endsection