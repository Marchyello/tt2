@extends('master')

@section('content')

    <h1>{{ $recipe->title }}</h1>
    <article>
        {{ $recipe->description }}
    </article>

    <hr/>

    @if(Auth::user())
        @if(Auth::user()->id === $recipe->user_id)
            {!! link_to_action('RecipesController@edit', 'Labot recepti', ['id' => $recipe->id], ['class' => 'btn btn-primary']) !!}
        @endif
    @endif

@stop