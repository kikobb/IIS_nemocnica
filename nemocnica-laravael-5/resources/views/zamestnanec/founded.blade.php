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
                    <th>Rodné číslo</th>
                    @if($currUser->pozicia == 'admin')
                        <th>Úprava</th>
                    @endif
                </tr>
                </thead>
                <tbody>

                @for ($i = 0; $i < count($pacienti); $i++)
                    <tr>
                        <td >{{$i +1}}</td>
                        <td >{{$pacienti[$i]->meno}}</td>
                        <td >{{$pacienti[$i]->priezvisko}}</td>
                        <td >{{$pacienti[$i]->rodne_cislo}}</td>
                        @if($currUser->pozicia == 'admin')
                            <td ><span class="input-group-btn">
                                <a href="{{ route('izba.edit', $izby[$i]->id) }}"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>
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