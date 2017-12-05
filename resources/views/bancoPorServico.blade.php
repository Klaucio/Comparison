@extends('layouts.master')
@section('title', 'Comparação de preços')
@section('content')
<!-- Testes-->
    <section id="section_comparar" class="flat-row flat-iconbox  ">
        <div id="bank-form" class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section left">
                        <h2>ESCOLHA OS BANCOS</h2>
                    </div><!-- /.title-section -->
                </div>
            </div><!-- /.row -->

            <div class="form-group">
                {{--Formulario de --}}
                <bancos services_array="{{json_encode($services_array)}}" selected_services="{{json_encode($selected_services) }}"> </bancos>

            </div><!--The end of the form group-->
        </div><!-- /.container -->
    </section><!-- /.flat-row-iconbox -->
    <!-- Fim dos testes -->
@endsection
@section('insert_javascript')
    {{--Incluir JS local--}}
    <script src="{{ asset('js/sb_bancos.js') }}"></script>

@endsection
