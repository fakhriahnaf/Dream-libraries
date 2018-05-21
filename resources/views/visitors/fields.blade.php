<!-- Nama Mahasiswa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama_Mahasiswa', 'Nama Mahasiswa:') !!}
    {!! Form::text('Nama_Mahasiswa', null, ['class' => 'form-control']) !!}
</div>

<!-- Nim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('NIM', 'Nim:') !!}
    {!! Form::text('NIM', null, ['class' => 'form-control']) !!}
</div>

<!-- Buku Yang Dipinjam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Buku_yang_dipinjam', 'Buku Yang Dipinjam:') !!}
    {!! Form::text('Buku_yang_dipinjam', null, ['class' => 'form-control']) !!}
</div>

<!-- Keterangan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('visitors.index') !!}" class="btn btn-default">Cancel</a>
</div>
