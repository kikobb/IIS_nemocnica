@extends('layouts.app')

@section('content')

    @if( empty($liek) )
        {{ Form::open(['route' => 'liek.store', 'method' => 'post', 'class' => 'form']) }}
    @else
        {{ Form::open(['route' => ['liek.destroy', $liek->id], 'method' => 'delete', 'class' => 'hidden', 'id' => 'deleteForm']) }}
        {{ Form::close() }}

        {{ Form::model($liek, ['route' => ['liek.update', $liek->id], 'method' => 'patch', 'class' => 'form']) }}
    @endif

    <div class="form-group">
        {{ Form::label('nazov', 'Nazov lieka', ['class' => 'form-control']) }}
        {{ Form::text('nazov', old('nazov'), []) }}
    </div>

    <div class="form-group">
        {{ Form::label('ucinna_latka', 'Ucinna latka', ['class' => 'form-control']) }}
        {{ Form::text('ucinna_latka', old('ucinna_latka')) }}
    </div>

    <div class="form-group">
        {{ Form::label('kontraindikacia', 'Kontraindikacia', ['class' => 'form-control']) }}
        {{ Form::text('kontraindikacia', old('kontraindikacia')) }}
    </div>

    <div class="form-group">
        {{ Form::submit('Ulozit') }}
        @if( !empty($liek) )
            <a href="#" onclick="$('deleteForm').submit()" class="btn btn-danger pull-right">Delete</a>
        @endif
    </div>

    {{ Form::close() }}
@endsection