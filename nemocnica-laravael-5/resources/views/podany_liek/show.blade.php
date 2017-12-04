@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Podaný liek</h2>

        <div class="row">
            <div class="col-md-5">Názov lieku:</div>
            <div class="col-md-5"> {{$podany_liek->getLiek()->nazov}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Čas:</div>
            <div class="col-md-5">{{$podany_liek->cas}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Množstvo:</div>
            <div class="col-md-5">{{$podany_liek->mnozstvo}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Pacient:</div>
            <div class="col-md-5">{{''.$pobyt->getPacient()->priezvisko.' '.$pobyt->getPacient()->meno}} </div>
        </div>
    </div>

    @if($currUser->pozicia == 'doktor')
        <div class="col-sm-6 " id="confirm">
            <a href="{{ route('podann_liek.edit', $podany_liek->id) }}" class="btn btn-info btn-lg">
                Zmena údajov
            </a>
        </div>
    @endif
@endsection