@extends('layouts.layout')

@section('content')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Pacient</th>
                    <th>Doktor</th>
                    <th>Príjemca</th>
                    <th>Dátum príchodu</th>
                    <th>Dátum odchodu</th>
                    <th>Izba</th>
                    <th>Oddelenie</th>
                    <th>Úprava</th>
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($pobyty); $i++)
                <tr>
                    <td >{{$i +1}}</td>
                    <td >{{$pobyty[$i]->pacient}}</td>
                    <td >{{$pobyty[$i]->doktor}}</td>
                    <td >{{$pobyty[$i]->prijemca}}</td>
                    <td >{{$pobyty[$i]->datum_prichodu}}</td>
                    <td >{{$pobyty[$i]->datum_odchodu}}</td>
                    <td >{{$pobyty[$i]->izba}}</td>
                    <td >{{$pobyty[$i]->getOddelenie}}</td>
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