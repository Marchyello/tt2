@extends('master')

@section('content')
    <h1>Profils: {{ $user->name }}</h1>
    <hr/>
    <h2>Receptes:</h2>
    @include('partials.recipesList')
    
@stop