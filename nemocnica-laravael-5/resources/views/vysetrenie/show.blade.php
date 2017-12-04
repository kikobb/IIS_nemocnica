@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Vyšetrenie</h2>

        <div class="row">
            <div class="col-md-5">Doktor:</div>
            <div class="col-md-6">{{''.$vysetrenie->getDoktor()->priezvisko.' '.$vysetrenie->getDoktor()->meno}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Pacient:</div>
            <div class="col-md-6">{{''.$vysetrenie->getPacient()->priezvisko.' '.$vysetrenie->getPacient()->meno}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Oddelenie:</div>
            <div class="col-md-6">{{$vysetrenie->first()->getOddelenie()->nazov}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Typ vyšetrenia:</div>
            <div class="col-md-6"> {{$vysetrenie->typ}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Dátum a čas:</div>
            <div class="col-md-6">{{$vysetrenie->created_at}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Správa:</div>
            <div class="col-md-6">{{$vysetrenie->sprava}} </div>
        </div>

        {{--<div class="table">--}}
            {{--<table class="table table-striped">--}}
                {{--<thead>--}}
                {{--<tr>--}}
                    {{--<th>#</th>--}}
                    {{--<th>Podanné lieky</th>--}}
                    {{--<th>Dávkovanie</th>--}}
                    {{--<th>Čas podávania</th>--}}
                {{--</tr>--}}
                {{--</thead>--}}
                {{--<tbody>--}}

                {{--@for ($i = 0; $i < count($podanne_lieky); $i++)--}}
                    {{--<tr>--}}
                        {{--<td >{{$i +1}}</td>--}}
                        {{--<td >{{$podanne_lieky}}</td>--}}
                        {{--<td >{{$podanne_lieky->mnozstvo}}</td>--}}
                        {{--<td >{{$podanne_lieky->cas}}</td>--}}
                    {{--</tr>--}}
                {{--@endfor--}}
                {{--</tbody>--}}
            {{--</table>--}}
        {{--</div>--}}


        @if($currUser->pozicia == 'doktor')
            <div class="col-sm-6 " id="confirm">
                <a href="{{ route('vysetrenie.edit', $vysetrenie->id) }}" class="btn btn-info btn-lg">
                    Zmena údajov
                </a>
            </div>
        @endif

    </div>
@endsection