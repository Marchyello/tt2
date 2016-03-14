@extends('master')

@section('content')
    <h1>
        Labot recepti: {!! $recipe->title !!}
    </h1>
    <hr/>
    {!! Form::model($recipe, ['method' => 'PATCH', 'action' => ['RecipesController@update', $recipe->id]]) !!}
        @include('recipes.form', ['buttonText' => 'Labot recepti'])
    {!! Form::close() !!}

    @include('errors.list')

@endsection