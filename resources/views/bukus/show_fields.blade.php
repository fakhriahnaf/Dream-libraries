<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $buku->id !!}</p>
</div>

<!-- Judul Buku Field -->
<div class="form-group">
    {!! Form::label('Judul_Buku', 'Judul Buku:') !!}
    <p>{!! $buku->Judul_Buku !!}</p>
</div>

<!-- Seri Buku Field -->
<div class="form-group">
    {!! Form::label('Seri_buku', 'Seri Buku:') !!}
    <p>{!! $buku->Seri_buku !!}</p>
</div>

<!-- Nama Pengarang Field -->
<div class="form-group">
    {!! Form::label('Nama_pengarang', 'Nama Pengarang:') !!}
    <p>{!! $buku->Nama_pengarang !!}</p>
</div>

<!-- Tanggal Terbit Field -->
<div class="form-group">
    {!! Form::label('Tanggal_terbit', 'Tanggal Terbit:') !!}
    <p>{!! $buku->Tanggal_terbit !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $buku->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $buku->updated_at !!}</p>
</div>

