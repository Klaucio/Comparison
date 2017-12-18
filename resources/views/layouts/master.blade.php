@extends('layouts.partials.header')
@section('title')
    @yield('title') {{--Para atribuição do título correspondente a cada Tela--}}
@endsection
@section('local_css'){{--Section for local css--}}
    @yield('local_css')
@endsection
@section('body')
    @include('layouts.partials.navbar')
    {{--<div class="boxed">--}}
        {{--for boxed layout--}}
        {{--@yield('slider')--}}
        @yield('content')
        {{--@include('layouts.partials.footer')--}}
        {{--Layout do footer--}}
    {{--</div> <!-- /.boxed -->--}}

    @include('layouts.partials.footer'){{--fechamento das tags body e html--}}
    @include('layouts.partials.javascript')
    @yield('insert_javascript'){{--Para inserir javascript se necessario--}}
@endsection {{--Only for boxed layout--}}

