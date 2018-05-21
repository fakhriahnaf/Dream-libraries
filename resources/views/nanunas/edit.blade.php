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
           <div class="box-body">
               <div class="row">
                   {!! Form::model($nanuna, ['route' => ['nanunas.update', $nanuna->id], 'method' => 'patch']) !!}

                        @include('nanunas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection