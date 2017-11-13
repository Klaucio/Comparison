<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<!-- Mirrored from corpthemes.com/html/finance/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 18 Jul 2017 15:45:59 GMT -->
<head>
    <!-- Basic Page Needs -->
    <meta charset="UTF-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>Financial Occult</title>

    <meta name="author" content="themsflat.com">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Boostrap style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.css">

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">

    <!-- Theme style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/style.css">

    <!-- Colors -->
    <link rel="stylesheet" type="text/css" href="stylesheet/colors/color1.css" id="colors">

    <!-- Reponsive -->
    <link rel="stylesheet" type="text/css" href="stylesheet/responsive.css">

    <!-- Animation Style -->
    <link rel="stylesheet" type="text/css" href="stylesheet/animate.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/custom.css">
    <link rel="stylesheet" type="text/css" href="stylesheet/style2.css">

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">



</head>
<body>

<script type="text/javascript">
    $bank_data='<?php echo $data ?>';
    $bank_data=json.parse($bank_data);
    alert($bank_data);
</script>

<div class="boxed">
    <!-- Preloader -->
    <div class="preloader">
        <div class="clear-loading loading-effect-2">
            <span></span>
        </div>
    </div>

    {{--<div class="top">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<ul class="flat-infomation">--}}
                        {{--<li class="phone">Call us: <a href="%2b61383766284.html" title="phone">+61 3 8376 6284</a></li>--}}
                        {{--<li class="email">Email: <a href="mailto:support24-7@gmail.com" title="email">support24-7@gmail.com</a></li>--}}
                    {{--</ul><!-- /flatAPPOINTMENT-infomation -->--}}
                    {{--<div class="flat-questions">--}}
                        {{--<a href="#" title="" class="questions">Have any questions?</a>--}}
                        {{--@if (Route::has('login'))--}}
                            {{--@auth--}}
                                {{--<a href="{{ url('/home') }}">Home</a>--}}
                                {{--@else--}}
                                    {{--<a href="#" title="" class="appointment" href="{{ route('login') }}">Login</a>--}}
                                    {{--<a href="#" title="" class="appointment" href="{{ route('register') }}">Register</a>--}}
                                    {{--@endauth--}}
                                {{--@endif--}}
                    {{--</div><!-- /.flat-questions -->--}}
                    {{--<div class="clearfix"></div><!-- /.clearfix -->--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div><!-- /.top -->--}}

    <header id="header" class="header bg-color">
        <div class="container">
            <div class="row">
                <div class="header-wrap">
                    <div class="col-md-2">
                        <div id="logo" class="logo">
                            <a href="#" title="">
                                <img src="images/logo-blog.png" alt="logo Finance Business"/>
                            </a>
                        </div><!-- /#logo -->
                    </div><!-- /.col-md-2 -->
                    <div class="col-md-10">
                        <div class="flat-show-search">
                            <div class="show-search">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                            <div class="top-search">
                                <form action="#" id="searchform-all" method="get">
                                    <div>
                                        <input type="text" id="s" class="sss" placeholder="Search...">
                                        <input type="submit" value="" id="searchsubmit">
                                    </div>
                                </form>
                            </div> <!-- /.top-search -->
                        </div>	<!-- /.flat-show-search -->
                        <div class="nav-wrap">
                            <div class="btn-menu">
                                <span></span>
                            </div><!-- //mobile menu button -->
                            <nav id="mainnav" class="mainnav">
                                <ul class="menu">
                                    <li>
                                        <a href="/" title="">Home  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="/servicos" title="">Serviços  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="services-v1.html" title="">Sobre Nós  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="contact-v1.html" title="">Contact  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                        <ul class="sub-menu">
                                            <li><a href="contact-v1.html" title="">Contact 01</a></li>
                                            <li><a href="contact-v2.html" title="">Contact 02</a></li>
                                        </ul><!-- /.sub-menu -->
                                    </li>
                                </ul><!-- /.menu -->
                            </nav><!-- /#mainnav -->
                        </div><!-- /.nav-wrap -->
                    </div><!-- /.col-md-9 -->
                </div><!-- /.header-wrap -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </header><!-- /header -->

    <!-- Testes-->
    <section id="section_comparar" class="flat-row flat-iconbox bg-theme">
        <div id="service-form" class="container">
            <script> alert(this.mensagem)</script>


            <div class="row">
                <div class="col-md-12">
                    <div class="title-section left">
                        <h2>Escolha Serviços Do Seu Interesse</h2>
                    </div><!-- /.title-section -->
                </div>
            </div><!-- /.row -->
            <form method="post" action="/resultado">
                {{--<div class="form-group">--}}

                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <input type="search" class="form-control" id="search" placeholder="Pesquise pelo Serviço..">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">

{{--                                {{var_dump($bancos)}}--}}

                                <div class="searchable-container">
                                @for($i = 0; $i <count($bancos); $i++)
                                    @for($j=0; $j<count($bancos['bancos'][$i]['servicos']); $j++)

                                    <div class="servicos col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                            <label class="btn btn-default">
                                                <div class="bizcontent">
                                                    <input type="checkbox" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <h5 class="wordwrap">{{$bancos['bancos'][$i]['servicos'][$j]['nome']}}</h5>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    @endfor
                                    @endfor

                                    {{--@empty--}}
                                        {{--<p>No Service created.</p>--}}
                                    {{--@endforelse--}}

                                {{--</div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 7px!important;">
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <a type="submit" href="resultado" class="btn btn-success"> Seguir >> </a>
                    </div>

                </div>

            </form>
            <div class="row">

            </div>

        </div><!-- /.container -->
    </section><!-- /.flat-row-iconbox -->

    <!-- Fim dos testes -->
    <section class="flat-row pd-imagebox">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="imagebox-item">
                        <div class="imagebox style1">
                            <div class="imagebox-image">
                                <img src="images/imagebox/001.jpg" alt="">
                            </div><!-- /.imagebox-image -->

                            <div class="imagebox-title">
                                <h3><a href="#" title="">Business Ideas And Innovation</a></h3>
                            </div><!-- /.iamgebox-title -->
                            <div class="imagebox-content">
                                <div class="imagebox-desc">
                                    Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium doloremque lau dantium, rem aperiam eaque ipsa ab illo inventore veritatis
                                </div>
                                <div class="imagebox-button">
                                    <a href="#" title="">read more</a>
                                </div>
                            </div><!-- /.imagebox-content -->
                        </div><!-- /.imagebox -->
                    </div><!-- /.imagebox-item -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="imagebox-item">
                        <div class="imagebox style1">
                            <div class="imagebox-image">
                                <img src="images/imagebox/002.jpg" alt="">
                            </div><!-- /.imagebox-image -->
                            <div class="imagebox-title">
                                <h3><a href="#" title="">Business Ideas And Innovation</a></h3>
                            </div><!-- /.imagebox-title -->
                            <div class="imagebox-content">
                                <div class="imagebox-desc">
                                    Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium doloremque lau dantium, rem aperiam eaque ipsa ab illo inventore veritatis
                                </div>
                                <div class="imagebox-button">
                                    <a href="#" title="">read more</a>
                                </div>
                            </div><!-- /.imagebox-content -->
                        </div><!-- /.imagebox -->
                    </div><!-- /.imagebox-item -->
                </div><!-- /.col-md-4 -->

                <div class="col-md-4">
                    <div class="imagebox-item">
                        <div class="imagebox style1">
                            <div class="imagebox-image">
                                <img src="images/imagebox/003.jpg" alt="">
                            </div><!-- /.imagebox-image -->
                            <div class="imagebox-title">
                                <h3><a href="#" title="">Directory Of Finance Businesses</a></h3>
                            </div><!-- /.imagebox-title -->
                            <div class="imagebox-content">
                                <div class="imagebox-desc">
                                    Sed ut perspiciatis unde omnis iste error sit voluptatem accusantium doloremque lau dantium, rem aperiam eaque ipsa ab illo inventore veritatis
                                </div>
                                <div class="imagebox-button">
                                    <a href="#" title="">learn more</a>
                                </div>
                            </div><!-- /.imagebox-content -->
                        </div><!-- /.imagebox -->
                    </div><!-- /.imagebox-item -->
                </div><!-- /.col-md-4 -->

            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.flat-row-imagebox -->


    <!-- Carousel -->
    <!-- Carousel -->
    <section class="flat-row flat-client">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="flat-carousel" data-item="5" data-nav="false" data-dots="false" data-auto="true">
                        <li class="item">
                            <img src="images/bancos/Abc.png" alt="img">
                        </li>
                        <li class="item">
                            <img src="images/bancos/bim1.png" alt="img">
                        </li>
                        <li class="item">
                            <img src="images/bancos/bci.png" alt="img">
                        </li>
                        <li class="item">
                            <img src="images/bancos/sdbk.png" alt="img">
                        </li>
                        <li class="item">
                            <img src="images/bancos/BarclIcon.png" alt="img">
                        </li>
                        <li class="item">
                            <img src="images/bancos/bm.png" alt="img">
                        </li>
                        <li class="item">
                            <img src="images/bancos/moza.png" alt="img">
                        </li>
                    </ul>
                </div> <!-- /.col-md-12 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </section> <!-- /.flat-row -->
    <footer id="footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget-infomation">
                            <ul class="infomation-footer">
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#" title="">support@themesflat.com</a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#" title="">+61 3 8376 6284</a></li>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#" title="">PO Box 16122 Collins Street West Victoria 8007 Australia</a></li>
                            </ul><!-- /.infomation-footer -->
                        </div><!-- /.widget-infomation -->
                    </div><!-- /.col-md-12 -->
                </div><!-- /.row -->
                <div class="row widget-box">
                    <div class="col-md-4">
                        <div class="widget widget-text">
                            <p>Lorem ipsum dolor sit consectetur adipiscing elit sed
                                do eiusmod tempor incididunt ut labore et dolore
                                magna veniam aliqua.Ut enim ad minim veniam
                            </p>
                            <p>
                                Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in
                                voluptate
                            </p>
                        </div><!-- /.widget-text -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="widget widget-services">
                            <ul class="one-half first">
                                <li><a href="#" title="">About Us</a></li>
                                <li><a href="#" title="">Advertise</a></li>
                                <li><a href="#" title="">Terms & Conditions</a></li>
                                <li><a href="#" title="">Privacy Policy</a></li>
                                <li><a href="#" title="">Careers</a></li>
                                <li><a href="#" title="">Shop</a></li>
                            </ul><!-- /.one-half -->
                            <ul class="one-half">
                                <li><a href="#" title="">Home</a></li>
                                <li><a href="#" title="">Testimonials</a></li>
                                <li><a href="#" title="">News</a></li>
                                <li><a href="#" title="">Services</a></li>
                                <li><a href="#" title="">Corporate Client</a></li>
                            </ul><!-- /.one-half -->
                        </div><!-- /.widget-services -->
                    </div><!-- /.col-md-4 -->
                    <div class="col-md-4">
                        <div class="widget widget-subscribe">
                            <form action="#" method="post" accept-charset="utf-8">
                                <label for="form-email-footer">Email address:</label>
                                <div class="input-email">
                                    <input type="email" name="email-form" id="form-email-footer" placeholder="Your email address" />
                                </div>
                                <button type="button" class="button-subscribe">SUBMIT</button>
                            </form>
                        </div><!-- /.widget-subscribe -->

                    </div><!-- /.col-md-4 -->
                </div><!-- /.row .widget-box -->
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright 2017 Finance. Theme by <a href="#" title="">Themesflat</a></p>
                        </div>
                        <ul class="menu-footer">
                            <li><a href="#" title="">Home</a></li>
                            <li><a href="#" title="">My Blog</a></li>
                            <li><a href="#" title="">My Home</a></li>
                            <li><a href="#" title="">Sample Page</a></li>
                        </ul><!-- /.menu-footer -->
                    </div>
                </div>
            </div>
        </div><!-- /.footer-bottom -->
    </footer><!-- /#footer -->
    <div class="button-go-top">
        <a href="#" title="" class="go-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

</div> <!-- /.boxed -->

<!-- Javascript -->
<script type="text/javascript" src="javascript/jquery.min.js"></script>
<script type="text/javascript" src="javascript/bootstrap.min.js"></script>
<script type="text/javascript" src="javascript/owl.carousel.js"></script>
<script type="text/javascript" src="javascript/jquery.easing.js"></script>
<script type="text/javascript" src="javascript/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="javascript/waypoints.min.js"></script>
<script type="text/javascript" src="javascript/switcher.js"></script>
<script type="text/javascript" src="javascript/jquery.cookie.js"></script>
<script type="text/javascript" src="javascript/main.js"></script>


<!-- Revolution Slider -->
<script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="revolution/js/slider_v1.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script src="{{ asset('js/servicos.js') }}"></script>

</body>

<!-- Mirrored from corpthemes.com/html/finance/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 18 Jul 2017 15:47:52 GMT -->
</html>