@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Myjobs
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($myjobs, ['route' => ['myjobs.update', $myjobs->id], 'method' => 'patch']) !!}

                        @include('myjobs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection