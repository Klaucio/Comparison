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
                <form method="POST" action="/serviceByBank" @submit.prevent="onSubmit">
                    {{--{{csrf_token()}}--}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                        <div class="searchable-container"><!--	A div a seguir percorre a lista de bancos para preencher os cards	-->
                            <div class="items col-xs-5 col-sm-5 col-lg-3 col-md-2" v-for="bank in banks">
                                <label for="cb">
                                    <article class="post style2 clearfix info-block block-info ">
                                        <label fi="@{{bank.id}}"  class="btn btn-default  featured-post img-card" >
                                            <div class="bizcontent post-image">
                                                <input type="checkbox" v-bind:id="bank.id" v-bind:value="bank.id" id="@{{bank.abreviatura}}" v-model="checkedBanks"  onclick="handleClick(this);" autocomplete="off">
                                                <img :src="'storage/logos/' + bank.logo" width="175" height="175" title="" class="post-image" alt=""> <!--.bank.logo-->
                                                {{--<span class="glyphicon glyphicon-check glyphicon-lg"></span>--}}
                                            </div>
                                            <ul class="post-date">
                                                <li class="day">@{{ bank.abreviatura }}</li>
                                                {{--<li class="month">JAN</li>--}}
                                            </ul>
                                        </label>

                                        <div class="content-post">
                                            <h5 class="title-post">
                                                @{{bank.designacao}}
                                            </h5>
                                            <div class="entry-post">

                                            </div>
                                        </div><!-- /.content-post -->
                                    </article><!-- /.post -->
                                </label>
                            </div><!-- /.col-md-2 -->
                            {{--@empty--}}
                            {{--<p>No Bank created.</p>--}}
                            {{--@endforelse--}}
                        </div>
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-10 col-sm-8">
                            <div for="results" class="row">
                                <span >@{{ checkedBanks}}</span>
                                {{--<p id="results">--}}
                                {{--<span>Checked names: {{ checkedNames }}</span>--}}
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-4">
                            <button class="btn btn-success"> Seguir >> </button>
                            {{--<button v-on:click="greet">Greet</button>--}}
                        </div>

                    </div>
                </form>
            </div><!--The end of the form group-->
        </div><!-- /.container -->
    </section><!-- /.flat-row-iconbox -->
@endsection
@section('insert_javascript')
    {{--Incluir JS local--}}
    <script src="{{ asset('js/init_bs_bancos.js') }}"></script>
@endsection
