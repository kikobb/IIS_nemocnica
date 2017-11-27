@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2> Údaje boli uložené</h2>

        <div>
            <div class="col-md-5">Názov oddelenia:</div>
            <div class="col-md-6"> {{$oddelenie->nazov}}</div>
        </div>

        <div>
            <div class="col-md-5">Účinná látka:</div>
            <div class="col-md-6">{{$oddelenie->poschodie}} </div>
        </div>


            <a href="liek/create" class="btn btn-info btn-lg">
                <span type="submit" class="glyphicon glyphicon-repeat"></span> Ďalšia registrácia
            </a>

            <a href="home_admin" class="btn btn-info btn-lg">
                <span type="submit" class="glyphicon glyphicon-home"></span> Domov
            </a>
        </div>

    </div>
@endsection