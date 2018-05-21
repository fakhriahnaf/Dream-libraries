@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Cantik
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cantik, ['route' => ['cantiks.update', $cantik->id], 'method' => 'patch']) !!}

                        @include('cantiks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection