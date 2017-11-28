@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Vyšetrenie</h2>

        <div class="row">
            <div class="col-md-5">Doktor:</div>
            <div class="col-md-5">{{$vysetrenie->getDoktor}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Pacient:</div>
            <div class="col-md-5">{{$vysetrenie->getPacient}} </div>
        </div>

        <div class="row">
            <div class="col-md-5">Typ vyšetrenia:</div>
            <div class="col-md-5"> {{$vysetrenie->typ}}</div>
        </div>

        <div class="row">
            <div class="col-md-5">Dátum a čas:</div>
            <div class="col-md-5">{{$vysetrenie->created_at}} </div>
        </div>

        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Podanné lieky</th>
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($vysetrenie); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{$vysetrenie->nazov}}</td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>

    </div>
@endsection