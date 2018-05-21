<!-- Judul Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Judul', 'Judul:') !!}
    {!! Form::text('Judul', null, ['class' => 'form-control']) !!}
</div>

<!-- Pengarang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Pengarang', 'Pengarang:') !!}
    {!! Form::text('Pengarang', null, ['class' => 'form-control']) !!}
</div>

<!-- Seri Field -->
<div class="form-group col-sm-6">
    {!! Form::label('seri', 'Seri:') !!}
    {!! Form::text('seri', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bukus.index') !!}" class="btn btn-default">Cancel</a>
</div>
