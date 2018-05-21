@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Nanuna
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
                <div class="input-group">
                        <div class="input-group-addon">
                          <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" class="form-control"
                               data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                      </div>

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'nanunas.store']) !!}

                        @include('nanunas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
