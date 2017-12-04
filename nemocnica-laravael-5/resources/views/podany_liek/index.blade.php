@extends('layouts.layout')

@section('content')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Názov</th>
                    <th>Látka</th>
                    <th>Kontraindikácia</th>
                    <th>Úprava</th>
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($lieky); $i++)
                <tr>
                <td >{{$i +1}}</td>
                <td >{{$lieky[$i]->nazov}}</td>
                <td >{{$lieky[$i]->ucinna_latka}}</td>
                <td >{{$lieky[$i]->kontraindikacia}}</td>
                <td ><span class="input-group-btn">
                <a href="liek/show"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>
                </span>
                </td>
                </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

@endsection