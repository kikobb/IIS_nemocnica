@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Pridať liek</h2>


        @if( empty($podanyLiek) )
            {{ Form::open(['route' => ['store_podany_liek', $vysetrenie_id], 'method' => 'post', 'class' => 'form']) }}
        @else
{{--            {{dd($podanyLiek)}}--}}
            {{ Form::model($podanyLiek, ['route' => ['podanyLiek.update', $podanyLiek->id], 'method' => 'patch', 'class' => 'form']) }}
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
        </div>

        {{ Form::close() }}


        @if( !empty($podany_liek) )
            {{ Form::open(['route' => ['podanyLiek.destroy', $podanyLiek->id], 'method' => 'delete', 'id' => 'deleteForm']) }}
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