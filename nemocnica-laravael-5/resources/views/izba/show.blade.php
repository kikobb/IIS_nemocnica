@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Izba</h2>
        {{--{{dd($izba)}}--}}

        <div class="row">
            <div class="col-md-5">Typ:</div>
            <div class="col-md-6"> {{$izba->typ}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Kapacita:</div>
            <div class="col-md-6">{{$izba->kapacita}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Číslo:</div>
            <div class="col-md-6">{{$izba->cislo}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Oddelenie:</div>
            <div class="col-md-6">{{$izba->getMyOddelenie()}}</div>
        </div>

        <a href="{{ route('izba.edit', $izba->id) }}" class="btn btn-info btn-lg">
            Zmena údajov
        </a>

    </div>
@endsection