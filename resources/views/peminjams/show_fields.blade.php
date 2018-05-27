<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $peminjam->id !!}</p>
</div>

<!-- Nama Peminjam Field -->
<div class="form-group">
    {!! Form::label('Nama_peminjam', 'Nama Peminjam:') !!}
    <p>{!! $peminjam->Nama_peminjam !!}</p>
</div>

<!-- Nim Field -->
<div class="form-group">
    {!! Form::label('Nim', 'Nim:') !!}
    <p>{!! $peminjam->Nim !!}</p>
</div>

<!-- Judul Buku Field -->
<div class="form-group">
    {!! Form::label('Judul_buku', 'Judul Buku:') !!}
    <p>{!! $peminjam->Judul_buku !!}</p>
</div>

<!-- Pengarang Field -->
<div class="form-group">
    {!! Form::label('Pengarang', 'Pengarang:') !!}
    <p>{!! $peminjam->Pengarang !!}</p>
</div>

<!-- Tanggal Pinjam Field -->
<div class="form-group">
    {!! Form::label('Tanggal_pinjam', 'Tanggal Pinjam:') !!}
    <p>{!! $peminjam->Tanggal_pinjam !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $peminjam->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $peminjam->updated_at !!}</p>
</div>

