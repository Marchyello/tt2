@extends('master')

@section('content')
    <h1>Receptes</h1>

    <hr/>

    @foreach($recipes as $recipe)
        <article>
            <h2>
                <a href="{{ url ('recipes', $recipe->id) }}">{{ $recipe->title }}</a>
            </h2>

            <div class="body">{{ $recipe->description }}</div>
        </article>
    @endforeach
@stop