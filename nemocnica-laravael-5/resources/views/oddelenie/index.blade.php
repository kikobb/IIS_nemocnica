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
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($oddelenia); $i++)
                <tr>
                    <td>{{$i +1}}</td>
                    <td>{{$oddelenia[$i]->nazov}}</td>
                    <td>{{$oddelenia[$i]->poschodie}}</td>
                </tr>
                @endfor
                </tbody>
            </table>
        </div>
    </div>

@endsection