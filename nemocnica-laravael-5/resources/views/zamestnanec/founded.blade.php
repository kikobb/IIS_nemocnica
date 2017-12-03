@extends('layouts.layout')

@section('content')


    <div class="col-sm-10 ">
        <div class="table">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Meno</th>
                    <th>Priezvisko</th>
                    <th>Oddelenie</th>
                    @if($currUser->pozicia == 'admin')
                        <th>Úprava</th>
                    @endif
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($osoby); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{$osoby[$i]->meno}}</td>
                        <td >{{$osoby[$i]->priezvisko}}</td>
                        <td >{{$osoby[$i]->getOddelenie}}</td>
                        @if($currUser->pozicia == 'admin')
                            <td ><span class="input-group-btn">
                                <a href="{{ route('zamestnanec.show', $osoby[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>
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