<!-- Judul Film Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Judul_Film', 'Judul Film:') !!}
    {!! Form::text('Judul_Film', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Rilis Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Tanggal_rilis', 'Tanggal Rilis:') !!}
    {!! Form::date('Tanggal_rilis', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('films.index') !!}" class="btn btn-default">Cancel</a>
</div>
