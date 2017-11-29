@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Vyšetrenie</h2>

        @if( empty($vysetrenie) )
            {{ Form::open(['route' => 'vysetrenie.store', 'method' => 'post', 'class' => 'form']) }}
        @else
            {{ Form::open(['route' => ['vysetrenie.destroy', $vysetrenie->id], 'method' => 'delete', 'class' => 'hidden', 'id' => 'deleteForm']) }}
            {{ Form::close() }}

            {{ Form::model($vysetrenie, ['route' => ['vysetrenie.update', $vysetrenie->id], 'method' => 'patch', 'class' => 'form']) }}
        @endif

        <div class="form-group">
            {{ Form::label('doktor', 'Doktor*:') }}
            {{ Form::text('doktor', $currUser->priezvisko,array('class'=>'form-control','required' => 'required', 'disabled' => 'disabled')) }}
            @if ($errors->has('doktor'))
                <span class="help-block">
                        <strong>{{ $errors->first('doktor') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('pacient', 'Rodné číslo pacienta*:') }}
            {{ Form::text('pacient', old('pacient'),array('placeholder'=>'1234567890','class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('pacient'))
                <span class="help-block">
                        <strong>{{ $errors->first('pacient') }}</strong>
                </span>
            @endif
        </div>


        <div class="form-group">
            {{ Form::label('typ', 'Typ vyšetrenia:') }}
            {{ Form::text('typ', $currUser->meno && $currUser->priezvisko,array('placeholder'=>'Typ vyšetrenia','class'=>'form-control')) }}
            @if ($errors->has('typ'))
                <span class="help-block">
                        <strong>{{ $errors->first('typ') }}</strong>
                    </span>
            @endif
        </div>


        <div class="form-group">
            {{ Form::label('sprava', 'Správa') }}
            {{ Form::text('sprava', old('sprava'),array('placeholder'=>'Správa','class'=>'form-control')) }}
            @if ($errors->has('sprava'))
                <span class="help-block">
                        <strong>{{ $errors->first('sprava') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::button('<span class="glyphicon glyphicon-save"></span> Uložiť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
            @if( !empty($vysetrenie) )
                <a href="#" onclick="$('deleteForm').submit()" class="btn btn-danger pull-right">Delete</a>
            @endif
        </div>

        <div class="form-group">
            <span >*</span> - sú označené povinné údaje
        </div>

        {{ Form::close() }}
    </div>
@endsection