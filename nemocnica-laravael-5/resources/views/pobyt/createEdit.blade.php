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
            <span >*</span> - sú označené povinné údaje
        </div>

        {{ Form::close() }}
    </div>
@endsection