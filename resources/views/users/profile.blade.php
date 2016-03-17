@extends('master')

@section('content')
    <h1>
        @if(Auth::user()->role === 1)
            Redaktors:
        @else
            Profils:
        @endif
            {{ $user->name }}
            <a href="{{ url('profile/preferences') }}" class="btn btn-info">Iestatījumi</a>
    </h1>
    <hr/>
    <h2>Receptes:</h2>
    @include('partials.recipesList')

@stop