@extends('master')

@section('content')
    <h1>
        Labot recepti: {!! $recipe->title !!}
    </h1>
    <hr/>
    {!! Form::model($recipe, ['method' => 'PATCH', 'action' => ['RecipesController@update', $recipe->id]]) !!}
        @include('partials.form', ['buttonText' => 'Labot recepti'])
    {!! Form::close() !!}

    <div class="text-right">
        {!! Form::open([
        'method' => 'DELETE',
        'route' => ['recipes.destroy', $recipe->id]
        ]) !!}
            {!! Form::submit('Dzēst recepti?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

    @include('errors.list')

@endsection