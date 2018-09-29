<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $jobs->id !!}</p>
</div>

<!-- Jopname Field -->
<div class="form-group">
    {!! Form::label('jopname', 'Jopname:') !!}
    <p>{!! $jobs->jopname !!}</p>
</div>

<!-- Slots Field -->
<div class="form-group">
    {!! Form::label('slots', 'Slots:') !!}
    <p>{!! $jobs->slots !!}</p>
</div>

<!-- Duration Field -->
<div class="form-group">
    {!! Form::label('duration', 'Duration:') !!}
    <p>{!! $jobs->duration !!}</p>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $jobs->price !!}</p>
</div>

<!-- Client Field -->
<div class="form-group">
    {!! Form::label('client', 'Client:') !!}
    <p>{!! $jobs->client !!}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{!! $jobs->status !!}</p>
</div>

