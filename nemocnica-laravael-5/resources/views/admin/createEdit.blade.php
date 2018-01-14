@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Admin</h2>

        @if( empty($osoba) )
            {{ Form::open(['route' => 'admin.store', 'method' => 'post', 'class' => 'form']) }}
        @else
           {{ Form::model($osoba, ['route' => ['admin.update', $osoba->id], 'method' => 'patch', 'class' => 'form']) }}
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
                @if(empty($osoba))
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
                {{ Form::label('rodne_cislo', 'Rodné číslo:') }}
                {{ Form::text('rodne_cislo', old('rodne_cislo'),array('placeholder'=>'Rodné číslo','class'=>'form-control')) }}
                @if ($errors->has('rodne_cislo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rodne_cislo') }}</strong>
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
                @if( !empty($osoba) )
                    <a href="{{ route('admin_editHeslo', $osoba->id) }}" class="btn btn-info btn-lg">
                        Zmena hesla
                    </a>
                @endif
            </div>

        {{ Form::close() }}

        @if( !empty($osoba) )
            {{ Form::open(['route' => ['admin.destroy', $osoba->id], 'method' => 'delete', 'id' => 'deleteForm']) }}
            <div class="form-group">
                {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Zmazať', array('class' => 'btn btn-danger','type'=>'submit') )}}
            </div>
            {{ Form::close() }}
        @endif


        <div class="form-group">
                <span>*</span> - sú označené povinné údaje
            </div>

    </div>
@endsection