@extends('master')

@section('content')
    <h1>Jauna recepte</h1>
    <hr/>

    {!! Form::open(['url' => 'recipes']) !!}
        @include('recipes.form')
    {!! Form::close() !!}

@stop