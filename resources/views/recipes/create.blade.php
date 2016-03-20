@extends('master')

@section('content')
    <h1>{{ trans('recipe.new') }}</h1>
    <hr/>

    {!! Form::open([
        'url' => 'recipes',
        'class' => 'form',
        'files' => 'true',
        ]) !!}
    {!! csrf_field() !!}
        @include('partials.form', ['buttonText' => trans('recipe.publishButton')])
    {!! Form::close() !!}

    @include('errors.list')

@stop