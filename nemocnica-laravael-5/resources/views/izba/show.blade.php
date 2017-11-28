@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Liek</h2>

        <div>
            <div class="col-md-5">Typ:</div>
            <div class="col-md-6"> {{$izba->typ}}</div>
        </div>

        <div>
            <div class="col-md-5">Kapacita:</div>
            <div class="col-md-6">{{$izba->kapacita}} </div>
        </div>

        <div>
            <div class="col-md-5">Číslo:</div>
            <div class="col-md-6">{{$izba->cislo}}</div>
        </div>

        <div>
            <div class="col-md-5">Oddelenie:</div>
            <div class="col-md-6">{{$izba->getMyOddelenie()}}</div>
        </div>

    </div>
@endsection