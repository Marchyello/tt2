@extends('master')

@section('content')
    @if($user->hasPreferences())
        @include('partials.updatePref')
    @else
        @include('partials.storePref')
    @endif
    {!! csrf_field() !!}
    <p>{{ trans('user.language') }}</p>
        {!! Form::select('language', ['lv' => trans('user.latvian'), 'en' => trans('user.english')]) !!}
    <br>
    <br>
    <p>{{ trans('user.background') }}</p>
        {!! Form::select('background', ['#ffffff' => trans('user.white'), '#b3ffcc' => trans('user.green'), '#ffe6ff' => trans('user.pink'), '#ffffb3' => trans('user.yellow')]) !!}
        <br>
        <br>
        {!! Form::submit(trans('user.save'), ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
