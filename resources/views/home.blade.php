@extends('../layouts.app')

@section('title','Comparação de Preços')
@section('css')
    {{--<link rel="stylesheet" type="text/css" href="stylesheet/paper_dashboard.css">--}}
@endsection
@section('content')
<div class="container">

    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
                <i class="fa fa-bar-chart"></i>
                <div class="count">6.674</div>
                <div class="title">Estatísticas</div>
            </div>
            <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
                <i class="fa fa-university"></i>
                <div class="count">7.538</div>
                <div class="title">Bancos Associados</div>
            </div>
            <!--/.info-box-->
        </div>
        <!--/.col-->

        {{--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">--}}
            {{--<div class="info-box dark-bg">--}}
                {{--<i class="fa fa-thumbs-o-up"></i>--}}
                {{--<div class="count">4.362</div>--}}
                {{--<div class="title">Order</div>--}}
            {{--</div>--}}
            {{--<!--/.info-box-->--}}
        {{--</div>--}}
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
                <i class="fa fa-chain-broken"></i>
                <div class="count">1.426</div>
                <div class="title">Canais Por Banco</div>
            </div>
            <!--/.info-box-->
        </div>
        <!--/.col-->

    </div>
    <!--/.row-->


</div>
@endsection
