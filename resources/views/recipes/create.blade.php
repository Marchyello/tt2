@extends('master')

@section('content')
    <h1>Jauna recepte</h1>
    <hr/>

    {!! Form::open([
        'url' => 'recipes',
        'class' => 'form',
        'files' => 'true',
        ]) !!}
    {!! csrf_field() !!}
        @include('partials.form', ['buttonText' => 'Publicēt'])
    {!! Form::close() !!}

    @include('errors.list')

@stop