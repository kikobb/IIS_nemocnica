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
            {{ Form::label('nazov', 'Doktor:') }}
            {{ Form::text('nazov', $currUser->meno && $currUser->priezvisko,array('placeholder'=>'Nazov lieku','class'=>'form-control','disabled' => 'disabled')) }}
            @if ($errors->has('nazov'))
                <span class="help-block">
                        <strong>{{ $errors->first('nazov') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('typ', 'Doktor:') }}
            {{ Form::text('typ', $currUser->meno && $currUser->priezvisko,array('placeholder'=>'Nazov lieku','class'=>'form-control','disabled' => 'disabled')) }}
            @if ($errors->has('typ'))
                <span class="help-block">
                        <strong>{{ $errors->first('typ') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('sprava', 'Účinná látka*:') }}
            {{ Form::text('sprava', old('sprava'),array('placeholder'=>'Účinná látka lieku','class'=>'form-control')) }}
            @if ($errors->has('sprava'))
                <span class="help-block">
                        <strong>{{ $errors->first('sprava') }}</strong>
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