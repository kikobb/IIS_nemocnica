@extends('layouts.layout')

@section('content')

    @include('layouts.vyhladavanie')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Doktor</th>
                    <th>Pacient</th>
                    <th>Oddelenie</th>
                    <th>Typ vyšetrenia</th>
                    <th>Dátum a čas</th>
                    @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra')
                        <th>Zobraziť</th>
                    @endif
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($vysetrenia); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{''.$vysetrenia[$i]->getDoktor()->priezvisko.' '.$vysetrenia[$i]->getDoktor()->meno}}</td>
                        <td >{{''.$vysetrenia[$i]->getPacient()->priezvisko.' '.$vysetrenia[$i]->getPacient()->meno}}</td>
                        <td >{{$vysetrenia[$i]->getOddelenie()->nazov}}</td>
                        <td >{{$vysetrenia[$i]->typ}}</td>
                        <td >{{$vysetrenia[$i]->created_at}}</td>
                        @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra')
                            <td ><span class="input-group-btn">
                                <a href="{{ route('vysetrenie.show', $vysetrenia[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>
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