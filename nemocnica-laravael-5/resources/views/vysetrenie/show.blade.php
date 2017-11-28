@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Vyšetrenie</h2>

        <div>
            <div class="col-md-5">Typ vyšetrenia:</div>
            <div class="col-md-5"> {{$vysetrenie->typ}}</div>
        </div>

        <div>
            <div class="col-md-5">Dátum a čas:</div>
            <div class="col-md-5">{{$vysetrenie->created_at}} </div>
        </div>

        {{--TODO tahat z databazy !!!!--}}
        <div class="table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Podanné lieky</th>
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($vysetrenie); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{$vysetrenie->nazov}}</td>
                        </td>
                    </tr>
                @endfor
                </tbody>
            </table>
        </div>

    </div>
@endsection