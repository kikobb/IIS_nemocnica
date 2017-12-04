@extends('layouts.layout')

@section('content')


    <div class="col-sm-10 ">
        <h2>Pobyty</h2>
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Doktor</th>
                    <th>Príjemca</th>
                    <th>Dátum príchodu</th>
                    <th>Dátum odchodu</th>
                    <th>Izba</th>
                    <th>Oddelenie</th>
                    <th>Zobraziť</th>
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($pobyty); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{''.$pobyty[$i]->getDoktor()->priezvisko.' '.$pobyty[$i]->getDoktor()->meno}}</td>
                        <td >{{''.$pobyty[$i]->getPrijemca()->priezvisko.' '.$pobyty[$i]->getPrijemca()->meno}}</td>
                        <td >{{$pobyty[$i]->datum_prichodu}}</td>
                        <td >{{$pobyty[$i]->datum_odchodu}}</td>
                        <td >{{$pobyty[$i]->getIzba()->cislo}}</td>
                        <td >{{$pobyty[$i]->getIzba()->getMyOddelenie()}}</td>
                        <td ><span class="input-group-btn"><a href="{{ route('pobyt.show', $pobyty[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>></span></td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

@endsection