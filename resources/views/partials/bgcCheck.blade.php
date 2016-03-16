@if(Auth::user())
    @if(Auth::user()->hasPreferences())
        background-color: {!! Auth::user()->preferences->background !!}
    @endif
@endif