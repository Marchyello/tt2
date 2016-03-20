@extends('master')

@section('content')
    <h1>{{ trans('recipe.recipes') }}</h1>

    <hr/>

    @include('partials.recipesList')
@stop