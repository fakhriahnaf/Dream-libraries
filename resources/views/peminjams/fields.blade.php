<!-- Nama Peminjam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama_peminjam', 'Nama Peminjam:') !!}
    {!! Form::text('Nama_peminjam', null, ['class' => 'form-control']) !!}
</div>

<!-- Nim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nim', 'Nim:') !!}
    {!! Form::text('Nim', null, ['class' => 'form-control']) !!}
</div>

<!-- Judul Buku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Judul_buku', 'Judul Buku:') !!}
    {!! Form::text('Judul_buku', null, ['class' => 'form-control']) !!}
</div>

<!-- Pengarang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Pengarang', 'Pengarang:') !!}
    {!! Form::text('Pengarang', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Pinjam Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tanggal_pinjam', 'Tanggal Pinjam:') !!}
    {!! Form::date('Tanggal_pinjam', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('peminjams.index') !!}" class="btn btn-default">Cancel</a>
</div>
