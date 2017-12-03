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

        @if($currUser->pozicia == 'admin')
            <div class="col-sm-6 " id="confirm">
            <a href="{{ route('oddelenie.edit', $oddelenie->id) }}" class="btn btn-info btn-lg">
                Zmena údajov
            </a>
            </div>
        @endif

    </div>
@endsection