<!-- Nim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nim', 'Nim:') !!}
    {!! Form::text('Nim', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama', 'Nama:') !!}
    {!! Form::text('Nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Departemen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Departemen', 'Departemen:') !!}
    {!! Form::text('Departemen', null, ['class' => 'form-control']) !!}
</div>

<!-- No Handphone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('No_handphone', 'No Handphone:') !!}
    {!! Form::number('No_handphone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mahasiswas.index') !!}" class="btn btn-default">Cancel</a>
</div>
