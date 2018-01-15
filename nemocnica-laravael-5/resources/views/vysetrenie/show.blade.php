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

        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Názov</th>
                    <th>Čas dávkovania </th>
                    <th>Množstvo dávkovania</th>
                    <th>Zobraziť</th>
                </tr>
                </thead>
                <tbody>

                @if($podane_lieky != null)
                    @for ($i = 0; $i < count($podane_lieky); $i++)
                        <tr>
                            <td >{{$i +1}}</td>
                            <td >{{$podane_lieky[$i]->getNazov()}}</td>
                            <td >{{$podane_lieky[$i]->cas}}</td>
                            <td >{{$podane_lieky[$i]->mnozstvo}}</td>
                            <td ><span class="input-group-btn">
                    <a href="{{ route('podanyLiek.edit', $podane_lieky[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>
                    </span>
                            </td>
                        </tr>
                    @endfor
                @endif
                </tbody>
            </table>
        </div>


        @if($currUser->pozicia == 'doktor')
            <div class="col-sm-6 " id="confirm">
                <a href="{{ route('vysetrenie.edit', $vysetrenie->id) }}" class="btn btn-info btn-lg">
                    Zmena údajov
                </a>
            </div>
        @endif

    </div>
@endsection