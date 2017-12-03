@extends('layouts.layout')

@section('content')

    @include('layouts.vyhladavanie')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Typ</th>
                    <th>Kapacita</th>
                    <th>Číslo</th>
                    <th>Oddelenie</th>
                    <th>Zobraziť</th>
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($izby); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{$izby[$i]->typ}}</td>
                        <td >{{$izby[$i]->kapacita}}</td>
                        <td >{{$izby[$i]->cislo}}</td>
                        <td >{{$izby[$i]->getMyOddelenie()}}</td>
                        <td ><span class="input-group-btn"><a href="{{ route('izba.show', $izby[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>></span></td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

@endsection