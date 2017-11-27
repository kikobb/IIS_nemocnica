@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Zmena hesla </h2>

        {{ Form::open(['route' => 'http://127.0.0.1:8080/password/email', 'method' => 'post', 'class' => 'form']) }}
            <div class="form-group">
                {{ Form::label('email', 'Emailová adresa:') }}
                {{ Form::email('email', old('email'),array('required' => 'required','placeholder'=>' janko@gmail.com','class'=>'form-control')) }}
            </div>

            <div class="form-group">
                <div class="col-md-8">
                    {{ Form::button('Odoslať link o zmene hesla',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
                </div>
            </div>

            <a class="btn btn-info btn-lg" href="prihlasenie.login">
                <span class="glyphicon glyphicon-log-in"></span> Prihlásiť
            </a>
        {{ Form::close() }}
    </div>


@include ('layouts.footer')
@endsection