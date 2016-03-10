@extends('master')

@section('content')
    <h1>{{ $recipe->title }}</h1>
    <article>
        {{ $recipe->description }}
    </article>
@stop