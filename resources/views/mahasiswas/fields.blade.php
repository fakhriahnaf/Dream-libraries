<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama', 'Nama:') !!}
    {!! Form::text('Nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Nim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NIM', 'Nim:') !!}
    {!! Form::text('NIM', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Alamat', 'Alamat:') !!}
    {!! Form::text('Alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('mahasiswas.index') !!}" class="btn btn-default">Cancel</a>
</div>
