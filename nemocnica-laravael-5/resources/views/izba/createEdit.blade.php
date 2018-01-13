@extends('layouts.layout')


@section('content')

    <div class="col-sm-6 ">
        <h2>Izba</h2>

        @if( empty($izba) )
            {{ Form::open(['route' => 'izba.store', 'method' => 'post', 'class' => 'form']) }}
        @else
            {{ Form::model($izba, ['route' => ['izba.update', $izba->id], 'method' => 'patch', 'class' => 'form']) }}
        @endif

        <div class="form-group">
            {{ Form::label('typ', 'Typ*:') }}
            {{ Form::select('typ',array('Ženy' => 'Ženy', 'Muži' => 'Muži','Deti-chlapci' => 'Deti-chlapci','Deti-dievčatá' => 'Deti-dievčatá'), old('typ'), array('class'=>'form-control','required' => 'required'))}}
        </div>

        <div class="form-group">
            {{ Form::label('kapacita', 'Kapacita*:') }}
            {{ Form::number('kapacita', old('kapacita'),array('placeholder'=>'1','class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('kapacita'))
                <span class="help-block">
                        <strong>{{ $errors->first('kapacita') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('cislo', 'Číslo*:') }}
            {{ Form::number('cislo', old('cislo'),array('placeholder'=>'1','class'=>'form-control','required' => 'required')) }}
            @if ($errors->has('cislo'))
                <span class="help-block">
                        <strong>{{ $errors->first('cislo') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group">
            {{ Form::label('oddelenie_id', 'Oddelenie*:') }}
            {{ Form::select('oddelenie_id',$oddelenia, old('oddelenie_id'), array('class'=>'form-control','required' => 'required'))}}
        </div>


        <div class="form-group">
            @if( !empty($izba) )
                {{ Form::button('<span class="glyphicon glyphicon-save"></span> Zmeniť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}

                @else
                    {{ Form::button('<span class="glyphicon glyphicon-save"></span> Uložiť',  array('class'=>'btn btn-info btn-lg','type'=>'submit')) }}
            @endif
        </div>



        @if( !empty($izba) )
            <div class="form-group">
                {{--{{ Form::open(['route' => ['izba.destroy', $izba->id], 'method' => 'delete', 'class' => 'hidden', 'id' => 'deleteForm']) }}--}}

                {{--{{ Form::button('<span class="glyphicon glyphicon-trash"></span> Zmazať', array('class' => 'btn btn-danger','type'=>'submit') )}}--}}
                {{--{{ Form::close() }}--}}

                <a href="{{ route('izba.destroy', $izba->id) }}" class="btn btn-danger">
                    <span class="glyphicon glyphicon-trash"></span>Zmena údajov
                </a>
            </div>
        @endif



        <div class="form-group">
            <span >*</span> - sú označené povinné údaje
        </div>
        {{ Form::close() }}


    </div>
@endsection