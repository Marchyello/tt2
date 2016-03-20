@extends('master')

@section('content')
    <h1>{{ trans('recipe.mmRecipes') }}</h1>
    <hr/>
    <h2>{{ trans('recipe.heading1') }}</h2>
    <h3>{{ trans('recipe.heading2') }}</h3>
    <hr/>
    <h4>{{ trans('recipe.heading3') }}</h4>
    <ul>
        <li>{{ trans('recipe.listed1') }}</li>
        <li>{{ trans('recipe.listed2') }}</li>
        <li>{{ trans('recipe.listed3') }}</li>
    </ul>
    <ol>
        <li>{{ trans('recipe.unlisted1') }}</li>
        <li>{{ trans('recipe.unlisted2') }}</li>
        <li>{{ trans('recipe.unlisted3') }}</li>
    </ol>
@endsection