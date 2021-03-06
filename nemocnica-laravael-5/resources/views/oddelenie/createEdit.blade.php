@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Oddelenie</h2>

        @if( empty($oddelenie) )
            {{ Form::open(['route' => 'oddelenie.store', 'method' => 'post', 'class' => 'form']) }}
        @else

            {{ Form::model($oddelenie, ['route' => ['oddelenie.update', $oddelenie->id], 'method' => 'patch', 'class' => 'form']) }}
        @endif

        <div class="form-group">
            {{ Form::label('nazov', 'Názov*:') }}
            {{ Form::text('nazov', old('nazov'),array('required' => 'required','placeholder'=>'Názov oddelenia','class'=>'form-control')) }}
            @if ($errors->has('nazov'))
                <span class="help-block">
                        <strong>{{ $errors->first('nazov') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('poschodie', 'Poschodie:') }}
            {{ Form::text('poschodie', old('ucinna_latka'),array('placeholder'=>'1','class'=>'form-control')) }}
            @if ($errors->has('poschodie'))
                <span class="help-block">
                        <strong>{{ $errors->first('poschodie') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
             {{ Form::button('<span class="glyphicon glyphicon-save"></span> Uložiť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
        </div>
        {{ Form::close() }}

        @if( !empty($oddelenie) )
            {{ Form::open(['route' => ['oddelenie.destroy', $oddelenie->id], 'method' => 'delete', 'id' => 'deleteForm']) }}
            <div class="form-group">
                {{ Form::button('glyphicon glyphicon-trash"></span> Zmazať', ['class' => 'btn btn-danger','type'=>'submit']) }}
            </div>
            {{ Form::close() }}
        @endif

        <div class="form-group">
            <span >*</span> - sú označené povinné údaje
        </div>

    </div>
@endsection