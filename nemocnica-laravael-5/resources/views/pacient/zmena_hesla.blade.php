@extends('layouts.layout')


@section('content')
    <div class="col-sm-6 ">
        <h2>Zmena hesla</h2>


        {{ Form::open(['route' => ['pacient_update_heslo', $currUser->id], 'method' => 'post', 'class' => 'form']) }}


        <div class="form-group">
            {{ Form::label('password_new', 'Nové heslo*:') }}
            {{ Form::password('password_new',array('required' => 'required','placeholder'=>' Heslo','class'=>'form-control')) }}
            @if ($errors->has('password_new'))
                <span class="help-block">
                        <strong>{{ $errors->first('password_new') }}</strong>
                    </span>
            @endif
        </div>


        <div class="form-group">
            <div class="col-md-8">
            {{ Form::button('<span class="glyphicon glyphicon-save"></span> Zmeniť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
            </div>
        </div>

        <div class="form-group">
            * - sú označené povinné údaje
        </div>

    </div>

@endsection