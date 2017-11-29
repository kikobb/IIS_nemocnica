@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Oddelenie</h2>

        <div class="row">
            <div class="col-md-5">Názov oddelenia:</div>
            <div class="col-md-5"> {{$oddelenie->nazov}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Poschodie:</div>
            <div class="col-md-5">{{$oddelenie->poschodie}} </div>
        </div>

    </div>
@endsection