@extends('master')

@section('content')
    @if($user->hasPreferences())
        @include('partials.updatePref')
    @else
        @include('partials.storePref')
    @endif
    <p>Valoda:</p>
        {!! Form::select('language', ['0' => 'Latviešu', '1' => 'English']) !!}
    <br>
    <br>
    <p>Fona krāsa</p>
        {!! Form::select('background', ['#66ffcc' => 'Zaļš', '#ffccff' => 'Rozā', '#ffff66' => 'Dzeltens']) !!}

        <br>
        <br>
        {!! Form::submit('Saglabāt', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
