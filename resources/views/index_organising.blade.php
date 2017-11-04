@include('layouts.partials.header')
@section('title')
    @yield('title') {{--Para atribuição do título correspondente a cada Tela--}}
@endsection
@section('get_box_layout')
    <div class="boxed"> {{--for boxed layout--}}
        @yield('slider')
        @yield('content')
        @include('layouts.partials.footer'){{--Layout do footer--}}
    </div> <!-- /.boxed -->
@endsection{{--Only for boxed layout--}}
@include('layouts.partials.javascript')
@yield('insert_javascript'){{--Para inserir javascript se necessario--}}
@include('layouts.partials.close_footer'){{--fechamento das tags body e html--}}
