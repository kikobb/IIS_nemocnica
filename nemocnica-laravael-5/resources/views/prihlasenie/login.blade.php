@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Prihlásenie </h2>

        {{ Form::open(['route' => 'loginValidate', 'method' => 'post', 'class' => 'form']) }}
        <form class="form-horizontal">

            <div class="form-group">
                {{ Form::label('email', 'Emailová adresa:') }}
                {{ Form::email('email', old('email'),array('required' => 'required autofocus','placeholder'=>' janko@gmail.com','class'=>'form-control')) }}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group">
                {{ Form::label('password', 'Heslo:') }}
                {{ Form::password('password',array('required' => 'required','placeholder'=>' Heslo','class'=>'form-control')) }}
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    {{ Form::label('remember', ' Zapamätať si ma:') }}
                    {{ Form::checkbox('remember', old('remember') ? 'checked' : '') }}
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-8">
                    {{ Form::button('<span class="glyphicon glyphicon-log-in"></span> Prihlásiť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
                    <a class="btn btn-link" href="prihlasenie.zabudnute_heslo">
                        Zabudli ste heslo?
                    </a>
                </div>
            </div>
        </form>
        {{Form::close()}}
    </div>
@endsection