@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Pobyt</h2>

        @if( empty($pobyt) )
            {{ Form::open(['route' => 'pobyt.store', 'method' => 'post', 'class' => 'form']) }}
        @else
            {{ Form::model($pobyt, ['route' => ['pobyt.update', $pobyt->id], 'method' => 'patch', 'class' => 'form']) }}
        @endif

        <div class="form-group">
            {{ Form::label('rodne_cislo', 'Pacient rodné číslo*:') }}
            {{ Form::text('rodne_cislo', old('rodne_cislo'),array('placeholder'=>'1234567890','class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('rodne_cislo'))
                <span class="help-block">
                        <strong>{{ $errors->first('rodne_cislo') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('doktor_poradie', 'Doktor*:') }}
            @if( empty($pobyt) )
                {{ Form::select('doktor_poradie', old('doktor_poradie'), array('class'=>'form-control','required' => 'required'))}}
            @else
                {{ Form::select('doktor_poradie', "".$pobyt->getDoktor()->priezvisko."".$pobyt->getDoktor()->meno, array('class'=>'form-control','required' => 'required'))}}
            @endif
        </div>


        <div class="form-group">
            {{ Form::label('prijemca', 'Príjemca*:') }}
            {{ Form::text('prijemca', "" . $currUser->priezvisko . " " . $currUser->meno,array('class'=>'form-control','required' => 'required', 'disabled' => 'disabled')) }}
            @if ($errors->has('prijemca'))
                <span class="help-block">
                        <strong>{{ $errors->first('prijemca') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('datum_prichodu', 'Dátum príchodu*:') }}
            {{ Form::date('datum_prichodu', old('datum_prichodu'),array('class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('datum_prichodu'))
                <span class="help-block">
                        <strong>{{ $errors->first('datum_prichodu') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('datum_odchodu', 'Dátum odchodu:') }}
            {{ Form::date('datum_odchodu', old('datum_odchodu'),array('class'=>'form-control')) }}
            @if ($errors->has('datum_odchodu'))
                <span class="help-block">
                        <strong>{{ $errors->first('datum_odchodu') }}</strong>
                </span>
            @endif
        </div>


        <div class="form-group">
            {{ Form::label('cislo_izby', 'Číslo izby*:') }}
            {{ Form::number('cislo_izby', old('cislo_izby'),array('placeholder'=>'1','class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('cislo_izby'))
                <span class="help-block">
                        <strong>{{ $errors->first('cislo_izby') }}</strong>
                </span>
            @endif
        </div>


        <div class="form-group">
            {{ Form::button('<span class="glyphicon glyphicon-save"></span> Uložiť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
        </div>

        {{ Form::close() }}


        @if( !empty($pobyt) )
            {{ Form::open(['route' => ['pobyt.destroy', $pobyt->id], 'method' => 'delete', 'id' => 'deleteForm']) }}
            <div class="form-group">
                {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Zmazať', array('class' => 'btn btn-danger','type'=>'submit') )}}
            </div>
            {{ Form::close() }}
        @endif


        <div class="form-group">
            <span >*</span> - sú označené povinné údaje
        </div>

    </div>
@endsection