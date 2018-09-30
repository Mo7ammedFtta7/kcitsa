<!-- User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user', 'User:') !!}
    {!! Form::number('user', null, ['class' => 'form-control']) !!}
</div>

<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Img:') !!}
    {!! Form::text('img', null, ['class' => 'form-control']) !!}
</div>

<!-- License No Field -->
<div class="form-group col-sm-6">
    {!! Form::label('license_no', 'License No:') !!}
    {!! Form::text('license_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('model', 'Model:') !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}
</div>

<!-- Color Field -->
<div class="form-group col-sm-6">
    {!! Form::label('color', 'Color:') !!}
    {!! Form::text('color', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Rented Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rented', 'Rented:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('rented', false) !!}
        {!! Form::checkbox('rented', '1', null) !!} 1
    </label>
</div>

<!-- Vehicle Make Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_make', 'Vehicle Make:') !!}
    {!! Form::number('vehicle_make', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::number('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('vehicles.index') !!}" class="btn btn-default">Cancel</a>
</div>
