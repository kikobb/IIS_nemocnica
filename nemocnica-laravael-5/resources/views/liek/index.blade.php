@extends('layouts.layout')

@section('content')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table">
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

                @foreach ($lieky as $liek)
                <tr>
                <td>1</td>
                <td>{{$liek->nazov}}</td>
                <td>{{$liek->ucinna_latka}}</td>
                <td>{{$liek->kontaindikacia}}</td>
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