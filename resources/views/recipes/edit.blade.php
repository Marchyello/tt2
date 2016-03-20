@extends('master')

@section('content')
    <h1>
        {{ trans('recipe.edit') }} {!! $recipe->title !!}
    </h1>
    <hr/>
    {!! Form::model($recipe, [
        'method' => 'PATCH',
        'class' => 'form',
        'action' => ['RecipesController@update', $recipe->id],
        'files' => 'true',
    ]) !!}
        @include('partials.form', ['buttonText' => trans('recipe.editButton')])
    {!! Form::close() !!}

    <div class="text-right">
        {!! Form::open([
        'method' => 'DELETE',
        'action' => ['RecipesController@destroy', $recipe->id]
        ]) !!}
            {!! Form::submit(trans('recipe.delete'), ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </div>

    @include('errors.list')

@endsection