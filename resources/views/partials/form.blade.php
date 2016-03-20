{!! csrf_field() !!}
<div class="form-group">
    {!! Form::label('title', 'Nosaukums:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Recepte:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {{ Form::label('image', 'Augšupielādēt attēlu') }}
    {{ Form::file('image', null) }}
</div>

<div class="form-group">
    {!! Form::submit($buttonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

