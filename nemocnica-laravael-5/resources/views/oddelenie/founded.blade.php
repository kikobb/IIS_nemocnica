@extends('layouts.layout')

@section('content')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Názov</th>
                    <th>Poschodie</th>
                    @if($currUser->pozicia == 'admin')
                        <th>Úprava</th>
                    @endif
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($oddelenia); $i++)
                    <tr>
                        <td>{{$i +1}}</td>
                        <td>{{$oddelenia[$i]->nazov}}</td>
                        <td>{{$oddelenia[$i]->poschodie}}</td>
                        <td><span class="input-group-btn">
                        <td >{{$lieky[$i]->kontraindikacia}}</td>
                        @if($currUser->pozicia == 'admin')
                            <td ><span class="input-group-btn">
                                    <a href="{{ route('oddelenie.edit', $oddelenia[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>
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