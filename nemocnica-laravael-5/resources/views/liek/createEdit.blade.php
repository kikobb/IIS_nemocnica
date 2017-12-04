@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Liek</h2>

        @if( empty($liek) )
            {{ Form::open(['route' => 'liek.store', 'method' => 'post', 'class' => 'form']) }}
        @else
            {{ Form::open(['route' => ['liek.destroy', $liek->id], 'method' => 'delete', 'class' => 'hidden', 'id' => 'deleteForm']) }}
            {{ Form::close() }}

            {{ Form::model($liek, ['route' => ['liek.update', $liek->id], 'method' => 'patch', 'class' => 'form']) }}
        @endif

        <div class="form-group">
            {{ Form::label('nazov', 'Nazov*:') }}
            {{ Form::text('nazov', old('nazov'),array('required' => 'required','placeholder'=>'Nazov lieku','class'=>'form-control')) }}
            @if ($errors->has('nazov'))
                <span class="help-block">
                    <strong>{{ $errors->first('nazov') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('ucinna_latka', 'Účinná látka*:') }}
            {{ Form::text('ucinna_latka', old('ucinna_latka'),array('placeholder'=>'Účinná látka lieku','class'=>'form-control')) }}
            @if ($errors->has('ucinna_latka'))
                <span class="help-block">
                        <strong>{{ $errors->first('ucinna_latka') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('kontraindikacia', 'Kontraindikácia') }}
            {{ Form::text('kontraindikacia', old('kontraindikacia'),array('placeholder'=>'Kontraindikácia lieku','class'=>'form-control')) }}
            @if ($errors->has('konraindikacia'))
                <span class="help-block">
                        <strong>{{ $errors->first('konraindikacia') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::button('<span class="glyphicon glyphicon-save"></span> Uložiť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
            @if( !empty($liek) )
                <a href="{{ route('liek.destroy', $liek->id) }}" onclick="$('deleteForm').submit()" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Zmazať</a>
            @endif
        </div>

        <div class="form-group">
            <span >*</span> - sú označené povinné údaje
        </div>

        {{ Form::close() }}
    </div>
@endsection