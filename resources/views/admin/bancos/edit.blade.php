@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Banco
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($banco, ['route' => ['admin.bancos.update', $banco->id], 'method' => 'patch']) !!}

                        @include('admin.bancos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection