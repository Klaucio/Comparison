<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $banco->id !!}</p>
</div>

<!-- Designacao Field -->
<div class="form-group">
    {!! Form::label('designacao', 'Designacao:') !!}
    <p>{!! $banco->designacao !!}</p>
</div>

<!-- Abreviatura Field -->
<div class="form-group">
    {!! Form::label('abreviatura', 'Abreviatura:') !!}
    <p>{!! $banco->abreviatura !!}</p>
</div>

<!-- Logo Field -->
<div class="form-group">
    {!! Form::label('logo', 'Logo:') !!}
    <p>{!! $banco->logo !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $banco->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $banco->updated_at !!}</p>
</div>

