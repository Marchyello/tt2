{!! csrf_field() !!}
<div class="form-group">
    {!! Form::label('title', trans('recipe.title')) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', trans('recipe.description')) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {{ Form::label('image', trans('recipe.uploadImage')) }}
    {{ Form::file('image', null) }}
</div>

<div class="form-group">
    {!! Form::submit($buttonText, ['class' => 'btn btn-primary form-control']) !!}
</div>

