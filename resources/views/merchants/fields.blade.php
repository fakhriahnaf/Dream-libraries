<!-- Nama Toko Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Nama_toko', 'Nama Toko:') !!}
    {!! Form::text('Nama_toko', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Gabung Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_gabung', 'Tanggal Gabung:') !!}
    {!! Form::date('tanggal_gabung', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('merchants.index') !!}" class="btn btn-default">Cancel</a>
</div>
