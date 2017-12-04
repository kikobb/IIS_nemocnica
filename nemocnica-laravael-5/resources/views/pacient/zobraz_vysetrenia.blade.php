@extends('layouts.layout')

@section('content')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Doktor</th>
                    <th>Oddelenie</th>
                    <th>Typ vyšetrenia</th>
                    <th>Dátum a čas</th>
                    <th>Zobraziť</th>
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($vysetrenia); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{$vysetrenia[$i]->getDoktor()}}</td>
                        <td >{{$vysetrenia[$i]->getOddelenie()}}</td>
                        <td >{{$vysetrenia[$i]->typ}}</td>
                        <td >{{$vysetrenia[$i]->created_at}}</td>
                        <td ><span class="input-group-btn"><a href="{{ route('vysetrenie.show', $vysetrenia[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>></span></td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

@endsection