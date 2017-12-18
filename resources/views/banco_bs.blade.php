@extends('layouts.master')
@section('title', 'Comparação de preços')
@section('content')
<!-- Testes-->
    <section id="section_comparar" class="flat-row flat-iconbox  ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section left">
                        <h2>FAÇA JÁ A COMPARAÇÃO</h2>
                    </div><!-- /.title-section -->
                </div>
            </div><!-- /.row -->
            <div id="bank-form" class="form-group">
                <banco-component></banco-component>
            </div>
        </div><!-- /.container -->
    </section><!-- /.flat-row-iconbox -->
@endsection
@section('insert_javascript')
    {{--Incluir JS local--}}
    <script src="{{ asset('js/init_bs_bancos.js') }}"></script>
@endsection
