<!-- Judul Buku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Judul_Buku', 'Judul Buku:') !!}
    {!! Form::text('Judul_Buku', null, ['class' => 'form-control']) !!}
</div>

<!-- Seri Buku Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Seri_buku', 'Seri Buku:') !!}
    {!! Form::text('Seri_buku', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Pengarang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama_pengarang', 'Nama Pengarang:') !!}
    {!! Form::text('Nama_pengarang', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Terbit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tanggal_terbit', 'Tanggal Terbit:') !!}
    {!! Form::date('Tanggal_terbit', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bukus.index') !!}" class="btn btn-default">Cancel</a>
</div>
