@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Pacient</h2>

        @if( empty($pacient) )
            {{ Form::open(['route' => 'pacient.store', 'method' => 'post', 'class' => 'form']) }}
        @else
            {{ Form::open(['route' => ['pacient.destroy', $pacient->id], 'method' => 'delete', 'class' => 'hidden', 'id' => 'deleteForm']) }}
            {{ Form::close() }}

            {{ Form::model($pacient, ['route' => ['pacient.update', $pacient->id], 'method' => 'patch', 'class' => 'form']) }}
        @endif


            <div class="form-group">
                {{ Form::label('meno', 'Meno*:') }}
                {{ Form::text('meno', old('meno'),array('required' => 'required autofocus','placeholder'=>'Krsné meno','class'=>'form-control')) }}
                @if ($errors->has('meno'))
                    <span class="help-block">
                        <strong>{{ $errors->first('meno') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group">
                {{ Form::label('priezvisko', 'Priezvisko*:') }}
                {{ Form::text('priezvisko', old('priezvisko'),array('required' => 'required','placeholder'=>'Priezvisko','class'=>'form-control')) }}
                @if ($errors->has('priezvisko'))
                    <span class="help-block">
                        <strong>{{ $errors->first('priezvisko') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                @if(empty($pacient))
                    {{ Form::label('password', 'Heslo*:') }}
                    {{ Form::password('password',array('required' => 'required','placeholder'=>' Heslo','class'=>'form-control')) }}
                @endif
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                {{ Form::label('email', 'Emailová adresa*:') }}
                {{ Form::email('email', old('email'),array('required' => 'required autofocus','placeholder'=>' janko@gmail.com','class'=>'form-control')) }}
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                {{ Form::label('rodne_cislo', 'Rodné číslo*:') }}
                {{ Form::text('rodne_cislo', old('rodne_cislo'),array('required' => 'required autofocus','placeholder'=>'Rodné číslo','class'=>'form-control')) }}
                @if ($errors->has('rodne_cislo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rodne_cislo') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group">
                {{ Form::label('cislo_poistovne', 'Číslo poisťovne*:') }}
                {{ Form::text('cislo_poistovne', old('cislo_poistovne'),array('required' => 'required autofocus','placeholder'=>'Číslo poisťovne','class'=>'form-control')) }}
                @if ($errors->has('cislo_poistovne'))
                    <span class="help-block">
                            <strong>{{ $errors->first('cislo_poistovne') }}</strong>
                        </span>
                @endif
            </div>

            <div class="form-group">
                {{ Form::label('mesto', 'Mesto:') }}
                {{ Form::text('mesto', old('mesto'),array('placeholder'=>'Mesto','class'=>'form-control')) }}
                @if ($errors->has('mesto'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mesto') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                {{ Form::label('psc', 'PSČ:') }}
                {{ Form::text('psc', old('psc'),array('placeholder'=>'PSČ','class'=>'form-control')) }}
                @if ($errors->has('psc'))
                    <span class="help-block">
                        <strong>{{ $errors->first('psc') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                {{ Form::label('ulica_cislo', 'Ulica a číslo domu:') }}
                {{ Form::text('ulica_cislo', old('ulica_cislo'),array('required' => 'required','placeholder'=>'Ulica a číslo domu','class'=>'form-control')) }}
                @if ($errors->has('ulica_cislo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ulica_cislo') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                {{ Form::label('stat', 'Štát:') }}
                {{ Form::text('stat', old('stat'),array('placeholder'=>'Krajina','class'=>'form-control')) }}
               @if ($errors->has('stat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('stat') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                {{ Form::label('datum_narodenia', 'Dátum narodenia:') }}
                {{ Form::date('datum_narodenia', old('datum_narodenia'),array('class'=>'form-control')) }}
                @if ($errors->has('datum_narodenia'))
                    <span class="help-block">
                        <strong>{{ $errors->first('datum_narodenia') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group">
                {{ Form::button('<span class="glyphicon glyphicon-save"></span> Uložiť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
                @if( !empty($pacient) )
                    <a href="{{ route('pacient.destroy', $pacient->id) }}" onclick="$('deleteForm').submit()" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Zmazať</a>
                @endif
            </div>

            <div class="form-group">
                <span>*</span> - sú označené povinné údaje
            </div>

        {{ Form::close() }}
    </div>
@endsection