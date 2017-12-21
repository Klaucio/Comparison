@extends('../layouts.app')

@section('title','Comparação de Preços')
@section('css')
    {{--<link rel="stylesheet" type="text/css" href="stylesheet/paper_dashboard.css">--}}
@endsection
@section('content')
<div id="admin" class="container">
    <home-component></home-component>
    <section class="section">
        <h1 class="title is-1">
        </h1>
        <graph-bar type="bar">
        </graph-bar>
    </section>
</div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>
    <script type="text/javascript" src="js/admin_home.js"></script>
@endsection