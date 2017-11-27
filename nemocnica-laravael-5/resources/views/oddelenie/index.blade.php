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
                    <th>Úprava</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($oddelenia as $oddelenie)
                <tr>
                <td>1</td>
                <td>{{$oddelenie->nazov}}</td>
                <td>{{$oddelenie->poschodie}}</td>
                <td><span class="input-group-btn">
                <a href="#"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>
                </span>
                </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection