@extends('layouts.layout')

@section('content')

    @include('layouts.vyhladavanie')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Názov</th>
                    <th>Čas</th>
                    <th>Množstvo</th>
                    <th>Pacient</th>
                    @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra')
                        <th>Zobraziť</th>
                    @endif
                </tr>
                </thead>
                <tbody>

                @if($poddane_lieky != null)
                    @for ($i = 0; $i < count($poddane_lieky); $i++)
                        <tr>
                            <td >{{$i +1}}</td>
                            <td >{{$poddane_lieky[$i]->getNazov()}}</td>
                            <td >{{$poddane_lieky[$i]->cas}}</td>
                            <td >{{$poddane_lieky[$i]->mnozstvo}}</td>
                            <td >{{''.$pobyty[$i]->getPacient()->priezvisko.' '.$pobyty[$i]->getPacient()->meno}}</td>
                            @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra')
                                <td ><span class="input-group-btn">
                                    <a href="{{ route('podany_liek', $poddane_lieky[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>
                                    </span>
                                </td>
                            @endif
                        </tr>
                    @endfor
                @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection