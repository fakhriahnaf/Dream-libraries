<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $buku->id !!}</p>
</div>

<!-- Judul Field -->
<div class="form-group">
    {!! Form::label('Judul', 'Judul:') !!}
    <p>{!! $buku->Judul !!}</p>
</div>

<!-- Pengarang Field -->
<div class="form-group">
    {!! Form::label('Pengarang', 'Pengarang:') !!}
    <p>{!! $buku->Pengarang !!}</p>
</div>

<!-- Seri Field -->
<div class="form-group">
    {!! Form::label('seri', 'Seri:') !!}
    <p>{!! $buku->seri !!}</p>
</div>

<!-- Keterangan Field -->
<div class="form-group">
    {!! Form::label('keterangan', 'Keterangan:') !!}
    <p>{!! $buku->keterangan !!}</p>
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

