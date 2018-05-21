<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $visitors->id !!}</p>
</div>

<!-- Nama Mahasiswa Field -->
<div class="form-group">
    {!! Form::label('Nama_Mahasiswa', 'Nama Mahasiswa:') !!}
    <p>{!! $visitors->Nama_Mahasiswa !!}</p>
</div>

<!-- Nim Field -->
<div class="form-group">
    {!! Form::label('NIM', 'Nim:') !!}
    <p>{!! $visitors->NIM !!}</p>
</div>

<!-- Buku Yang Dipinjam Field -->
<div class="form-group">
    {!! Form::label('Buku_yang_dipinjam', 'Buku Yang Dipinjam:') !!}
    <p>{!! $visitors->Buku_yang_dipinjam !!}</p>
</div>

<!-- Tanggal Pinjam Field -->
<div class="form-group">
    {!! Form::label('tanggal_pinjam', 'Tanggal Pinjam:') !!}
    <p>{!! $visitors->tanggal_pinjam !!}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{!! $visitors->keterangan !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $visitors->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $visitors->updated_at !!}</p>
</div>

