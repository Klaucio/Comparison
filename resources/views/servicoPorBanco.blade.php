@extends('layouts.master')
@section('title', 'Comparação de preços')
@section('content')
    <!-- Testes-->
    <section id="section_comparar" class="flat-row flat-iconbox bg-theme">
        <div id="service-form" class="container">

            <div class="row">
                <div class="col-md-12">
                    <div class="title-section left">
                        <h2>Escolha Serviços Que Deseja</h2>
                    </div><!-- /.title-section -->
                </div>
            </div><!-- /.row -->
            {{--Form--}}
            <servicos banks="{{json_encode($banks_array)}}" services="{{json_encode($bancos) }}"> </servicos>

            <div class="row">

            </div>

        </div><!-- /.container -->
    </section><!-- /.flat-row-iconbox -->
@endsection
@section('insert_javascript')
    {{--Incluir JS local--}}
    <script src="/js/bs_servicos.js"></script>
@endsection