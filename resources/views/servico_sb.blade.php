@extends('layouts.master')
@section('title', 'Comparação de preços')
@section('content')
    <!-- Testes-->
<section id="section_comparar" class="flat-row flat-iconbox bg-theme">
    <div id="service-form" class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="title-section left">
                    <h2>Escolha Serviços Do Seu Interesse</h2>
                </div><!-- /.title-section -->
            </div>
        </div><!-- /.row -->
        <servicos> </servicos>
        <div class="row">

        </div>

    </div><!-- /.container -->
</section><!-- /.flat-row-iconbox -->

<!-- Fim dos testes -->
@endsection
@section('insert_javascript')
    {{--Incluir JS local--}}
    <script type="text/javascript" src="js/init_sb_servicos.js"></script>
@endsection
