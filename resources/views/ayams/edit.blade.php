@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Ayam
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($ayam, ['route' => ['ayams.update', $ayam->id], 'method' => 'patch']) !!}

                        @include('ayams.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection