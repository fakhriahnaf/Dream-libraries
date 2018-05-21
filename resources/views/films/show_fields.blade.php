<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $film->id !!}</p>
</div>

<!-- Judul Film Field -->
<div class="form-group">
    {!! Form::label('Judul_Film', 'Judul Film:') !!}
    <p>{!! $film->Judul_Film !!}</p>
</div>

<!-- Tanggal Rilis Field -->
<div class="form-group">
    {!! Form::label('Tanggal_rilis', 'Tanggal Rilis:') !!}
    <p>{!! $film->Tanggal_rilis !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $film->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $film->updated_at !!}</p>
</div>

