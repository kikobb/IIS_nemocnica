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
            {{ Form::text('doktor', "" . $currUser->priezvisko . " " . $currUser->meno,array('class'=>'form-control','required' => 'required', 'disabled' => 'disabled')) }}
            @if ($errors->has('doktor'))
                <span class="help-block">
                        <strong>{{ $errors->first('doktor') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('rodne_cislo', 'Rodné číslo pacienta*:') }}
            {{ Form::text('rodne_cislo', old('rodne_cislo'),array('placeholder'=>'1234567890','class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('rodne_cislo'))
                <span class="help-block">
                        <strong>{{ $errors->first('rodne_cislo') }}</strong>
                </span>
            @endif
        </div>


        <div class="form-group">
            {{ Form::label('typ', 'Typ vyšetrenia:') }}
            {{ Form::text('typ', old('typ'),array('placeholder'=>'Typ vyšetrenia','class'=>'form-control')) }}
            @if ($errors->has('typ'))
                <span class="help-block">
                        <strong>{{ $errors->first('typ') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('oddelenie_id', 'Oddelenie*:') }}
            {{ Form::select('oddelenie_id',$oddelenia, old('oddelenie_id'), array('class'=>'form-control','required' => 'required'))}}
        </div>


        <div class="form-group">
            {{ Form::label('sprava', 'Správa') }}
            {{ Form::textarea('sprava', old('sprava'),array('placeholder'=>'Správa','class'=>'form-control')) }}
            @if ($errors->has('sprava'))
                <span class="help-block">
                        <strong>{{ $errors->first('sprava') }}</strong>
                    </span>
            @endif
        </div>


        <div class="form-group">
            {{ Form::button('<span class="glyphicon glyphicon-save"></span> Uložiť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
            @if( !empty($vysetrenie) )
                {{ Form::open(['method' => 'DELETE', 'route' => ['vysetrenie.destroy', $vysetrenie->id],'class' => 'hidden', ]) }}
                {{ Form::button('<span class="<span class="glyphicon glyphicon-trash"></span> Zmazať', ['class' => 'btn btn-danger','type'=>'submit']) }}
                {{ Form::close() }} @endif
        </div>

        <div class="form-group">
            <span >*</span> - sú označené povinné údaje
        </div>

        {{ Form::close() }}

    </div>

    {{--@include('podany_liek.createEdit')--}}

@endsection