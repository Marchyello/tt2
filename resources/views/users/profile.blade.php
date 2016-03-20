@extends('master')

@section('content')
    <h1>
        @if(Auth::user()->role === 1)
            {{ trans('user.editor') }}
        @else
            {{ trans('user.profileCol') }}
        @endif
            {{ $user->name }}
            <a href="{{ url('profile/preferences') }}" class="btn btn-info">{{ trans('user.settings') }}</a>
    </h1>
    <hr/>
    <h2>{{ trans('user.recipes') }}</h2>
    @include('partials.recipesList')

@stop