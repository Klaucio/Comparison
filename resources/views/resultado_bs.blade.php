@extends('layouts.master')
@section('title', 'Comparação de preços')
@section('content')
    <!-- Testes-->
    <section id="section_comparar" class="flat-row flat-iconbox bg-theme">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section left">
                        <h2>Resultado</h2>
                    </div><!-- /.title-section -->
                </div>
            </div><!-- /.row -->
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-12 col-md-12 col-lg-12" v-bind="false">
                                <canvas class="densityChart" width="600" height="300"
                                        style="max-height: 500px !important; text-align: center!important; float: left!important; ">
                                </canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
        <div id="results" class="container">
            <div class="flex-center position-ref full-height">
                <div id="app" class="content">
                    <result-component bank_data="{{json_encode($servicos)}}" lista_bancos_ids="{{json_encode($lista_bancos) }}"></result-component>

                </div>
            </div>
        </div>
    </section><!-- /.flat-row-iconbox -->
    <!-- Fim dos testes -->
@endsection
@section('insert_javascript')
    {{--Incluir JS local--}}
    <script type="text/javascript">
        //pega os resultados e passa para uma variavel(array) javascript
        var bank_data ={!! json_encode($servicos,JSON_OBJECT_AS_ARRAY) !!};
        var lista_bancos_ids ={!! json_encode($lista_bancos,JSON_OBJECT_AS_ARRAY) !!};
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>
    <script type="text/javascript" src="js/bs_resultados.js"></script>
    {{--<script type="text/javascript" src="js/chart_js.js"></script>--o,l}}--}}


@endsection
