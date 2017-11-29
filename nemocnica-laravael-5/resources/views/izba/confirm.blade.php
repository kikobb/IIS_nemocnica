@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Údaje boli uložené</h2>

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
            <div class="col-md-6">{{$izba->oddelenie}}</div>
        </div>


    </div>

    <div class="col-sm-6 " id="confirm">

        <a href="izba/create" class="btn btn-info btn-lg">
            Ďalšia registrácia
        </a>

        <a href="{{ route('izba.edit', $izba->id) }}" class="btn btn-info btn-lg">
            Zmena údajov
        </a>

    </div>
@endsection