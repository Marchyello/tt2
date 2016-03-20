@extends('master')

@section('content')

    <h1>{{ $recipe->title }}</h1>
    <article>
        <p>
            {{ $recipe->description }}
        </p>
        <img src="/{{ $recipe->image }}">
    </article>

    <hr/>

    @if(Auth::user())
        @if(Auth::user()->id === $recipe->user_id || Auth::user()->role === 1)
            {!! link_to_action('RecipesController@edit', 'Labot recepti', ['id' => $recipe->id], ['class' => 'btn btn-primary']) !!}
        @endif
    @endif

@stop