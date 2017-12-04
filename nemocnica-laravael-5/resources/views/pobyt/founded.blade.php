@extends('layouts.layout')

@section('content')

    @include('layouts.vyhladavanie')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Pacient</th>
                    <th>Doktor</th>
                    <th>Prijemca</th>
                    <th>Dátum príchodu</th>
                    <th>Dátum odchodu</th>
                    <th>Izba</th>
                    <th>Oddelenie</th>
                    @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra' || $currUser->pozicia == 'prijemca')
                        <th>Zobraziť</th>
                    @endif
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($pobyty); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{$pobyty[$i]->getPacient()}}</td>
                        <td >{{$pobyty[$i]->getDoktor()}}</td>
                        <td >{{$pobyty[$i]->getPrijemca()}}</td>
                        <td >{{$pobyty[$i]->datum_prichodu}}</td>
                        <td >{{$pobyty[$i]->datum_odchodu}}</td>
                        <td >{{$pobyty[$i]->getIzba()}}</td>
                        <td >{{$pobyty[$i]->getMyOddelenie()}}</td>
                        @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra' || $currUser->pozicia == 'prijemca')
                            <td ><span class="input-group-btn">
                                <a href="{{ route('pobyt.show', $pobyty[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>
                                </span>
                            </td>
                        @endif
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

@endsection