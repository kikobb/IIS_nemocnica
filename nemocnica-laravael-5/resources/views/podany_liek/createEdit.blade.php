@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Pridať liek</h2>

        @if( empty($podany_liek) )
            {{ Form::open(['route' => ['store_podany_liek',$vysetrenie_id], 'method' => 'post', 'class' => 'form']) }}
        @else
            {{ Form::open(['route' => ['podanyLiek.destroy', $podany_liek->id], 'method' => 'delete', 'class' => 'hidden', 'id' => 'deleteForm']) }}
            {{ Form::close() }}

            {{ Form::model($podany_liek, ['route' => ['podanyLiek.update', $podany_liek->id], 'method' => 'patch', 'class' => 'form']) }}
        @endif

        <div class="form-group">
                {{ Form::label('liek_id', 'Nazov lieku*:') }}
                {{ Form::select('liek_id',$lieky, old('liek_id'), array('placeholder'=>'Nazov lieku','class'=>'form-control','required' => 'required'))}}
        </div>

        <div class="form-group">
            {{ Form::label('cas', 'Čas dávkovania*:') }}
            {{ Form::text('cas', old('cas'),array('placeholder'=>'Dávkovanie','class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('cas'))
                <span class="help-block">
                        <strong>{{ $errors->first('cas') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('mnozstvo', 'Množstvo podaného lieku*') }}
            {{ Form::text('mnozstvo', old('mnozstvo'),array('placeholder'=>'Množstvo podaného lieku','class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('mnozstvo'))
                <span class="help-block">
                        <strong>{{ $errors->first('mnozstvo') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::button('<span class="glyphicon glyphicon-save"></span> Uložiť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
            @if( !empty($podany_liek) )
                {{ Form::open(['method' => 'DELETE', 'route' => ['podanyLiek.destroy', $podany_liek->id],'class' => 'hidden', ]) }}
                {{ Form::button('<span class="glyphicon glyphicon-trash"></span> Zmazať', ['class' => 'btn btn-danger','type'=>'submit']) }}
                {{ Form::close() }}@endif
        </div>

        <div class="form-group">
            <span >*</span> - sú označené povinné údaje
        </div>

        {{ Form::close() }}
    </div>
@endsection