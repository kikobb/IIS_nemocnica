@extends('layouts.layout')

@section('content')


    <div class="col-sm-10 ">
        <h2>Lieky</h2>
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Názov</th>
                    <th>Čas</th>
                    <th>Množstvo</th>
                    <th>Zobraziť</th>
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($podane_lieky); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{$podane_lieky[$i]->getNazov()}}</td>
                        <td >{{$podane_lieky[$i]->cas}}</td>
                        <td >{{$podane_lieky[$i]->mnozstvo}}</td>
                        <td ><span class="input-group-btn"><a href="{{ route('podanyLiek.show', $podane_lieky[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>></span></td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

@endsection