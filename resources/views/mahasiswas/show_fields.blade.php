<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $mahasiswa->id !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('Nama', 'Nama:') !!}
    <p>{!! $mahasiswa->Nama !!}</p>
</div>

<!-- Nim Field -->
<div class="form-group">
    {!! Form::label('NIM', 'Nim:') !!}
    <p>{!! $mahasiswa->NIM !!}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('Alamat', 'Alamat:') !!}
    <p>{!! $mahasiswa->Alamat !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $mahasiswa->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $mahasiswa->updated_at !!}</p>
</div>

