<!-- Canal Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('canal_id', 'Canal Id:') !!}
    {!! Form::number('canal_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Servico Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('servico_id', 'Servico Id:') !!}
    {!! Form::number('servico_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Banco Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banco_id', 'Banco Id:') !!}
    {!! Form::number('banco_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Preco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preco', 'Preco:') !!}
    {!! Form::number('preco', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.canalServicos.index') !!}" class="btn btn-default">Cancel</a>
</div>
