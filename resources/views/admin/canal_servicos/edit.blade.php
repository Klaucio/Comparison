@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Canal Servico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($canalServico, ['route' => ['admin.canalServicos.update', $canalServico->id], 'method' => 'patch']) !!}

                        @include('admin.canal_servicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection