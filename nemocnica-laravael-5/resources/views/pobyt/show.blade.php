@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2>Pobyt</h2>

        <div class="row">
            <div class="col-md-5">Pacient:</div>
            <div class="col-md-6"> {{$pobyt->pacient}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Doktor:</div>
            <div class="col-md-6"> {{$pobyt->doktor}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Príjemca:</div>
            <div class="col-md-6"> {{$pobyt->prijemca}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Dátum príchodu:</div>
            <div class="col-md-6">{{$pobyt->datum_prichodu}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Dátum odchodu:</div>
            <div class="col-md-6">{{$pobyt->datum_odchodu}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Izba:</div>
            <div class="col-md-6">{{$pobyt->izba}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Oddelenie:</div>
            <div class="col-md-6">{{$pobyt->getOddelenie}}</div>
        </div>
    </div>
@endsection