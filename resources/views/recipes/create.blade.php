@extends('master')

@section('content')
    <h1>Jauna recepte</h1>
    <hr/>

    {!! Form::open(['url' => 'recipes']) !!}
        @include('recipes.form', ['buttonText' => 'Publicēt'])
    {!! Form::close() !!}

    @include('errors.list')

@stop