@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Registrácia - lieku</h2>

        @if( empty($liek) )
            {{ Form::open(['route' => 'liek.store', 'method' => 'post', 'class' => 'form']) }}
        @else
            {{ Form::open(['route' => ['liek.destroy', $liek->id], 'method' => 'delete', 'class' => 'hidden', 'id' => 'deleteForm']) }}
            {{ Form::close() }}

            {{ Form::model($liek, ['route' => ['liek.update', $liek->id], 'method' => 'patch', 'class' => 'form']) }}
        @endif


        <div class="form-group">
            {{ Form::label('pacient', 'Pacient rodné číslo*:') }}
            {{ Form::text('pacient', old('pacient'),array('placeholder'=>'1234567890','class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('pacient'))
                <span class="help-block">
                        <strong>{{ $errors->first('pacient') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('doktor', 'Doktor*:') }}
            {{ Form::select('doktor',$doktori, old('doktor'), array('class'=>'form-control','required' => 'required'))}}
        </div>


        <div class="form-group">
            {{ Form::label('prijemca', 'Príjemca*:') }}
            {{ Form::text('prijemca', $currUser->priezvisko && $currUser->meno,array('class'=>'form-control','required' => 'required', 'disabled' => 'disabled')) }}
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
            {{ Form::label('izba', 'Číslo izby:') }}
            {{ Form::number('izba', old('izba'),array('placeholder'=>'1','class'=>'form-control')) }}
            @if ($errors->has('izba'))
                <span class="help-block">
                        <strong>{{ $errors->first('izba') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            <span >*</span> - sú označené povinné údaje
        </div>

        {{ Form::close() }}
    </div>
@endsection