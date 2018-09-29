<!-- Jopname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jopname', 'Jopname:') !!}
    {!! Form::number('jopname', null, ['class' => 'form-control']) !!}
</div>

<!-- Slots Field -->
<div class="form-group col-sm-6">
    {!! Form::label('slots', 'Slots:') !!}
    {!! Form::number('slots', null, ['class' => 'form-control']) !!}
</div>

<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', 'Duration:') !!}
    {!! Form::number('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client', 'Client:') !!}
    {!! Form::number('client', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jobs.index') !!}" class="btn btn-default">Cancel</a>
</div>
