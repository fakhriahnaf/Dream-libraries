<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $merchant->id !!}</p>
</div>

<!-- Nama Toko Field -->
<div class="form-group">
    {!! Form::label('Nama_toko', 'Nama Toko:') !!}
    <p>{!! $merchant->Nama_toko !!}</p>
</div>

<!-- No Handphone Field -->
<div class="form-group">
    {!! Form::label('No_handphone', 'No Handphone:') !!}
    <p>{!! $merchant->No_handphone !!}</p>
</div>

<!-- Tanggal Gabung Field -->
<div class="form-group">
    {!! Form::label('tanggal_gabung', 'Tanggal Gabung:') !!}
    <p>{!! $merchant->tanggal_gabung !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $merchant->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $merchant->updated_at !!}</p>
</div>

