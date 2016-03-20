@extends('master')

@section('content')
    @if($user->hasPreferences())
        @include('partials.updatePref')
    @else
        @include('partials.storePref')
    @endif
    {!! csrf_field() !!}
    <p>Valoda:</p>
        {!! Form::select('language', ['0' => 'Latviešu', '1' => 'English']) !!}
    <br>
    <br>
    <p>Fona krāsa</p>
        {!! Form::select('background', ['#ffffff' => 'Balts', '#b3ffcc' => 'Zaļš', '#ffe6ff' => 'Rozā', '#ffffb3' => 'Dzeltens']) !!}
        <br>
        <br>
        {!! Form::submit('Saglabāt', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
