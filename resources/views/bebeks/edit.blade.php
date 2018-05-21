@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bebek
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bebek, ['route' => ['bebeks.update', $bebek->id], 'method' => 'patch']) !!}

                        @include('bebeks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection