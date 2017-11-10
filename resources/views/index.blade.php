<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="{{ app()->getLocale() }}"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v-bind="http://www.w3.org/1999/xhtml"
	  xmlns:v-on="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

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

    <!-- Favicon and touch icons  -->
    <link href="icon/apple-touch-icon-48-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/apple-touch-icon-32-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="icon/favicon.png" rel="shortcut icon">

</head>
	<body>

        <div class="boxed">
		<!-- Preloader -->
	    <div class="preloader">
	        <div class="clear-loading loading-effect-2">
	            <span></span>
	        </div>
	    </div>

		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul class="flat-infomation">
							<li class="phone">Call us: <a href="%2b61383766284.html" title="phone">+61 3 8376 6284</a></li>
							<li class="email">Email: <a href="mailto:support24-7@gmail.com" title="email">support24-7@gmail.com</a></li>
						</ul><!-- /flatAPPOINTMENT-infomation -->
						<div class="flat-questions">
							<a href="#" title="" class="questions">Have any questions?</a>
							@if (Route::has('login'))
								@auth
									<a href="{{ url('/home') }}">Home</a>
									@else
										<a href="#" title="" class="appointment" href="{{ route('login') }}">Login</a>
										<a href="#" title="" class="appointment" href="{{ route('register') }}">Register</a>
										@endauth
								@endif
						</div><!-- /.flat-questions -->
						<div class="clearfix"></div><!-- /.clearfix -->
					</div>
				</div>
			</div>
		</div><!-- /.top -->

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

		<!-- START REVOLUTION SLIDER 5.4.2 auto mode -->
        {{--<div id="banner-container" class="rev_slider_wrapper fullwidthbanner-container" data-alias="classic4export" data-source="gallery" style="margin:0px auto;background-color:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">--}}
                {{--<!-- START REVOLUTION SLIDER 5.3.0.2 auto mode -->--}}
                {{--<div id="banner-slide" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">--}}
                    {{--<div class="slotholder"></div>--}}


                    {{--<ul><!-- SLIDE  -->--}}

                        {{--<!-- SLIDE 3 -->--}}
                        {{--<li data-index="rs-3049" data-transition="slideremovedown" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="Ken Burns" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">--}}

                            {{--<!-- MAIN IMAGE -->--}}
                            {{--<img src="images/slides/slide1.png"  alt=""  data-bgposition="center center" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10" class="rev-slidebg" data-no-retina>--}}
                            {{--<!-- LAYERS -->--}}

                            {{--<!-- LAYER NR. 12 -->--}}
                            {{--<div class="tp-caption title-slide color-white letter-spacing3px"--}}
                                {{--id="slide-3049-layer-1"--}}
                                {{--data-x="['left','left','left','left']" data-hoffset="['39','39','39','39']"--}}
                                {{--data-y="['middle','middle','middle','middle']" data-voffset="['-105','-77','-77','-77']"--}}
                                {{--data-fontsize="['55','52','45','35']"--}}
                                {{--data-lineheight="['60','57','50','40']"--}}
                                {{--data-fontweight="['600','600','600','600']"--}}
                                {{--data-width="none"--}}
                                {{--data-height="none"--}}
                                {{--data-whitespace="nowrap"--}}

                                {{--data-type="text"--}}
                                {{--data-responsive_offset="on"--}}

                                {{--data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}

                                {{--data-textAlign="['left','left','left','left']"--}}
                                {{--data-paddingtop="[10,10,10,10]"--}}
                                {{--data-paddingright="[0,0,0,0]"--}}
                                {{--data-paddingbottom="[0,0,0,0"--}}
                                {{--data-paddingleft="[0,0,0,0]"--}}

                                {{--style="z-index: 16; white-space: nowrap;text-transform:left;">We help businesses<br>innovate and grow--}}
                            {{--</div>--}}

                            {{--<!-- LAYER NR. 13 -->--}}
                            {{--<div class="tp-caption sub-title color-white"--}}
                                {{--id="slide-3049-layer-4"--}}
                                {{--data-x="['left','left','left','left']" data-hoffset="['37','37','37','37']"--}}
                                {{--data-y="['middle','middle','middle','middle']" data-voffset="['30','30','30','0']"--}}
                                {{--data-fontsize="['20',18','18','14']"--}}
                                {{--data-lineheight="['30','28','28','24']"--}}
                                {{--data-fontweight="['400','400','400','400']"--}}
                                {{--data-width="none"--}}
                                {{--data-height="none"--}}
                                {{--data-whitespace="nowrap"--}}

                                {{--data-type="text"--}}
                                {{--data-responsive_offset="on"--}}

                                {{--data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}
                                {{--data-textAlign="['left','left','left','left']"--}}
                                {{--data-paddingtop="[0,0,0,0]"--}}
                                {{--data-paddingright="[0,0,0,0]"--}}
                                {{--data-paddingbottom="[0,0,0,0]"--}}
                                {{--data-paddingleft="[0,0,0,0]"--}}

                                {{--style="z-index: 17; white-space: nowrap;text-transform:left;">With over 10 years of experience helping businesses to find<br>comprehensive solutions--}}
                            {{--</div>--}}

                            {{--<a href="#" target="_self" class="tp-caption flat-button-slider bg-blue"--}}

                            {{--data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}

                            {{--data-x="['left','left','left','left']" data-hoffset="['36','36','36','36']"--}}
                            {{--data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','80']"--}}
                            {{--data-fontsize="['14','14','14','14']"--}}
                            {{--data-width="['auto']"--}}
                            {{--data-height="['auto']">Our Company--}}
                            {{--</a><!-- END LAYER LINK -->--}}

                            {{--<a href="#" target="_self" class="tp-caption flat-button-slider bg-transparent"--}}

                            {{--data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}

                            {{--data-x="['left','left','left','left']" data-hoffset="['205','205','205','205']"--}}
                            {{--data-y="['middle','middle','middle','middle']" data-voffset="['140','140','140','80']"--}}
                            {{--data-fontsize="['14',14','14','14']"--}}
                            {{--data-width="['auto']"--}}
                            {{--data-height="['auto']">Get in Touch--}}
                            {{--</a><!-- END LAYER LINK -->--}}
                        {{--</li>--}}

                        {{--<!-- SLIDE 2 -->--}}
                        {{--<li data-index="rs-3048" data-transition="random-static" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"    data-rotate="0"  data-saveperformance="off"  data-title="HTML5 Video" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">--}}
                            {{--<!-- MAIN IMAGE -->--}}
                            {{--<img src="images/slides/slide1.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg" data-no-retina>--}}

                            {{--<!-- BACKGROUND VIDEO LAYER -->--}}
                            {{--<div class="rs-background-video-layer"--}}
                                {{--data-forcerewind="on"--}}
                                {{--data-volume="mute"--}}
                                {{--data-vimeoid="183002944"--}}
                                {{--data-videoattributes="background=1%26title%3d0%26byline%3d0%26portrait%3d0%26api%3d1_.html--}}
                                {{--data-videowidth="100%"--}}
                                {{--data-videoheight="100%"--}}
                                {{--data-videocontrols="none"--}}
                                {{--data-videostartat="00:00"--}}
                                {{--data-videoendat="00:48"--}}
                                {{--data-videoloop="loop"--}}
                                {{--data-forceCover="1"--}}
                                {{--data-aspectratio="4:3"--}}
                                {{--data-autoplay="true"--}}
                                {{--data-autoplayonlyfirsttime="false" ></div>--}}


                            {{--<!-- LAYER NR. 12 -->--}}
                            {{--<div class="tp-caption title-slide color-white"--}}
                                {{--id="slide-3048-layer-1"--}}
                                {{--data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"--}}
                                {{--data-y="['middle','middle','middle','middle']" data-voffset="['-95','-95','-95','-55']"--}}
                                {{--data-fontsize="['58','55','45','30']"--}}
                                {{--data-lineheight="['60','57','55','35']"--}}
                                {{--data-fontweight="['600','600','600','600']"--}}
                                {{--data-width="none"--}}
                                {{--data-height="none"--}}
                                {{--data-whitespace="nowrap"--}}

                                {{--data-type="text"--}}
                                {{--data-responsive_offset="on"--}}

                                {{--data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'--}}

                                {{--data-textAlign="['center','center','center','center']"--}}
                                {{--data-paddingtop="[10,10,10,10]"--}}
                                {{--data-paddingright="[0,0,0,0]"--}}
                                {{--data-paddingbottom="[0,0,0,0"--}}
                                {{--data-paddingleft="[0,0,0,0]"--}}

                                {{--style="z-index: 16; white-space: nowrap;text-transform:left;">FINANCE WORDPRESS THEME--}}
                            {{--</div>--}}

                            {{--<!-- LAYER NR. 13 -->--}}
                            {{--<div class="tp-caption sub-title color-white"--}}
                                {{--id="slide-3048-layer-4"--}}
                                {{--data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"--}}
                                {{--data-y="['middle','middle','middle','middle']" data-voffset="['-15','-15','0','0']"--}}
                                {{--data-fontsize="['20',18','18','14']"--}}
                                {{--data-lineheight="['30','28','28','24']"--}}
                                {{--data-fontweight="['400','400','400','400']"--}}
                                {{--data-width="none"--}}
                                {{--data-height="none"--}}
                                {{--data-whitespace="nowrap"--}}

                                {{--data-type="text"--}}
                                {{--data-responsive_offset="on"--}}

                                {{--data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}
                                {{--data-textAlign="['center','center','center','center']"--}}
                                {{--data-paddingtop="[0,0,0,0]"--}}
                                {{--data-paddingright="[0,0,0,0]"--}}
                                {{--data-paddingbottom="[0,0,0,0]"--}}
                                {{--data-paddingleft="[0,0,0,0]"--}}

                                {{--style="z-index: 17; white-space: nowrap;text-transform:left;">Comece Já A Fazer A Comparação De Preços<br> Para iniciar seleccione os bancos, depois os serviços!--}}
                            {{--</div>--}}

                            {{--<a href="#section_comparar" target="_self" class="tp-caption flat-button-slider bg-transparent"--}}

                            {{--data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'--}}

                            {{--data-x="['center','center','center','center']" data-hoffset="['-18','-18','0','0']"--}}
                            {{--data-y="['middle','middle','middle','middle']" data-voffset="['100','100','100','70']"--}}
                            {{--data-fontsize="['14',14','14','14']"--}}
                            {{--data-width="['188']"--}}
                            {{--data-height="['auto']"><h2><i class="fa fa-chevron-circle-down"></i></h2>--}}
                            {{--</a><!-- END LAYER LINK -->--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
        {{--</div><!-- END REVOLUTION SLIDER -->--}}

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

                <div class="row">
                    <div class="form-group">
                        <div class="searchable-container">
                            <div class="col-xs-5 col-sm-5 col-md-3 col-lg-3">
                                <label class="btn btn-default">
                                    <span class="pull-right clickable close close-icon" data-effect="fadeOut"><i class="fa fa-times"></i></span>
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                            <div class="bizcontent">
                                                {{--<input type="checkbox" name="var_id[]" autocomplete="off" value="">--}}
                                                <span class="glyphicon glyphicon-ok glyphicon-lg"> </span>
                                                <h5 id="results"></h5>
                                            </div>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div><!-- end of the results-->
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
                                                            <input v-bind:id="bank.id" v-bind:value="bank.id" id="@{{bank.abreviatura}}" v-model="checkedBanks" type="checkbox" onclick="handleClick(this);" autocomplete="off">
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
                                                            <a href="" title="">@{{bank.designacao}}</a>
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
							<div class="col-md-10">
								<div for="results" class="row">
									<span >@{{ checkedBanks}}</span>
									{{--<p id="results">--}}
									{{--<span>Checked names: {{ checkedNames }}</span>--}}
								</div>
							</div>
							<div class="col-md-2">
								{{--<a type="submit" href="servicosBanco" class="btn btn-success"> Seguir >> </a>--}}
								<button class="btn btn-success"> Seguir >> </button>
								{{--<button v-on:click="greet">Greet</button>--}}
							</div>

						</div>
                	</form>
				</div><!--The end of the form group-->
			</div><!-- /.container -->
		</section><!-- /.flat-row-iconbox -->
		<!-- Fim dos testes -->

		<section class="flat-row flat-iconbox bg-theme">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="title-section left">
							<h2>Nossos Serviços</h2>
						</div><!-- /.title-section -->
					</div>
				</div><!-- /.row -->

				<div class="row">

					<div class="col-md-4">
						<div class="iconbox-item">
							<div class="iconbox style1">
								<div class="box-header">
									<div class="icon-rounded ion-clipboard">

									</div><!-- /.icon-rounded -->
									<div class="box-title">
										<a href="%27.html#" title="">Accumulation</a>
									</div><!-- /.box-title -->
								</div><!-- /.box-header -->
								<div class="box-content">
									Donec lacinia mi rutrum sagittis
									consequat. Donec sagittis, tellus sodales
									sollicitudin commodo
								</div><!-- /.box-content -->
							</div><!-- /.iconbox -->
						</div><!-- /.iconbox-item -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-4">
						<div class="iconbox-item">
							<div class="iconbox style1">
								<div class="box-header">
									<div class="icon-rounded line-chart">

									</div>
									<div class="box-title">
										<a href="%27.html#" title="">Mutual Funds</a>
									</div>
								</div><!-- /.box-header -->
								<div class="box-content">
									Donec lacinia mi rutrum sagittis
									consequat. Donec sagittis, tellus sodales
									sollicitudin commodo
								</div><!-- /.box-content -->
							</div><!-- /.iconbox -->
						</div><!-- /.iconbox-item -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-4">
						<div class="iconbox-item">
							<div class="iconbox style1">
								<div class="box-header">
									<div class="icon-rounded clock">

									</div>
									<div class="box-title">
										<a href="%27.html#" title="">Risk Management</a>
									</div>
								</div><!-- /.box-header -->
								<div class="box-content">
									Donec lacinia mi rutrum sagittis
									consequat. Donec sagittis, tellus sodales
									sollicitudin commodo
								</div><!-- /.box-content -->
							</div><!-- /.iconbox -->
						</div><!-- /.iconbox-item -->
					</div><!-- /.col-md-4 -->

				</div><!-- /.row -->

				<div class="row">
					<div class="col-md-12">
						<div class="height80"></div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="iconbox-item">
							<div class="iconbox style1">
								<div class="box-header">
									<div class="icon-rounded magic">

									</div>
									<div class="box-title">
										<a href="%27.html#" title="">Estate Planning</a>
									</div>
								</div><!-- /.box-header -->
								<div class="box-content">
									Donec lacinia mi rutrum sagittis
									consequat. Donec sagittis, tellus sodales
									sollicitudin commodo
								</div><!-- /.box-content -->
							</div><!-- /.iconbox -->
						</div><!-- /.iconbox-item -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-4">
						<div class="iconbox-item">
							<div class="iconbox style1">
								<div class="box-header">
									<div class="icon-rounded artboard">

									</div>
									<div class="box-title">
										<a href="%27.html#" title="">Retirement Planning</a>
									</div>
								</div><!-- /.box-header -->
								<div class="box-content">
									Donec lacinia mi rutrum sagittis
									consequat. Donec sagittis, tellus sodales
									sollicitudin commodo
								</div><!-- /.box-content -->
							</div><!-- /.iconbox -->
						</div><!-- /.iconbox-item -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-4">
						<div class="iconbox-item">
							<div class="iconbox style1">
								<div class="box-header">
									<div class="icon-rounded global">

									</div>
									<div class="box-title">
										<a href="%27.html#" title="">Business Planning</a>
									</div>
								</div><!-- /.box-header -->
								<div class="box-content">
									Donec lacinia mi rutrum sagittis
									consequat. Donec sagittis, tellus sodales
									sollicitudin commodo
								</div><!-- /.box-content -->
							</div><!-- /.iconbox -->
						</div><!-- /.iconbox-item -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->

			</div><!-- /.container -->
		</section><!-- /.flat-row-iconbox -->

		<section class="flat-row flat-callback">
			<div class="container">
				<div class="row">

					<div class="col-md-4">
						<div class="text-block-callback">
							<h2>Get a Call Back</h2>
							<div class="text-callback-content">
								 If you need to speak to us about a general query fill
								 in the form below and we will call you back within
								the same working day.
							</div>
						</div><!-- /.text-block-callback -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-8">
						<div class="flat-callback-form">
							<form action="#" method="post">
								<div class="flat-field">
									<div class="field-one-half">
										<label>How can we help? *</label>
										<select name="discuss">
										   <option value="I would like to discuss:">I would like to discuss:</option>
										   <option value="I would like to discuss:">I would like to discuss:</option>
										   <option value="I would like to discuss:">I would like to discuss:</option>
										</select>
									</div><!-- /.field-one-half -->
									<div class="field-one-half field-email">
										<input type="email" name="field-email" placeholder="You Email" />
									</div><!-- /.field-one-half -->
									<div class="clearfix"></div>
								</div>
								<div class="flat-field">
									<div class="field-one-half field-phone">
										<input type="text" name="field-phone" placeholder="You phone number" />
									</div>
									<div class="field-one-half field-submit">
										<button type="button" class="button-submit-field">Submit Now</button>
									</div>
								</div><!-- /.flat-field -->
							</form><!-- /.form -->
						</div><!-- /.callback-form -->
					</div><!-- /.col-md-8 -->

				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.flat-callback -->

		<section class="flat-row bg-theme">
			<div class="container">

				<div class="row">
					<div class="col-md-12">
						<div class="title-section left">
							<h2>
								Latest news
							</h2>
						</div><!-- /.title-section -->
					</div>
				</div><!-- /.row -->

				<div class="row">

					<div class="col-md-4">
                        <article class="post style2">
                            <div class="featured-post">
                                <a href="blog.html" title="" class="post-image">
                                    <img src="images/news/large-01.jpg" alt="">
                                </a>
                                <ul class="post-date">
                                    <li class="day">11</li>
                                    <li class="month">JAN</li>
                                </ul>
                            </div><!-- /.featured-post -->
                            <div class="content-post">
                                <h4 class="title-post">
                                    <a href="blog.html" title="">Why Do I Need To Use Financial ?</a>
                                </h4>
                                <div class="entry-post">
                                    <p>Sed facilisis lorem in orci bibendum
                                        ullamcorper. Mauris vitae augue
                                        elementum, ...</p>
                                </div>
                            </div><!-- /.content-post -->
                        </article><!-- /.post -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <article class="post style2">
                            <div class="featured-post">
                                <a href="blog.html" title="" class="post-image">
                                    <img src="images/news/large-02.jpg" alt="">
                                </a>
                                <ul class="post-date">
                                    <li class="day">11</li>
                                    <li class="month">JAN</li>
                                </ul>
                            </div><!-- /.featured-post -->
                            <div class="content-post">
                                <h4 class="title-post">
                                    <a href="blog.html" title="">Why your sales forecast is off</a>
                                </h4>
                                <div class="entry-post">
                                    <p>Sed facilisis lorem in orci bibendum
                                        ullamcorper. Mauris vitae augue
                                        elementum, ...
                                    </p>
                                </div>
                            </div><!-- /.content-post -->
                        </article><!-- /.post -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-md-4">
                        <div class="slidebar-news">
                        <aside class="widget widget-recent-news">
                            <ul class="recent-news">
                                <li>
                                    <div class="thumb">
                                        <span class="overlay-pop"></span>
                                        <a href="blog.html">
                                            <img src="images/news/image-small-01.png" alt="">
                                        </a><!-- /.thumb -->
                                    </div><!-- /.row -->
                                    <div class="text">
                                        <h4>
                                            <a href="blog.html" title="">Why Do I Need To Use Financial ?</a>
                                        </h4>
                                        <div class="entry-post">
                                            <p>January 11, 2017</p>
                                        </div>
                                    </div><!-- /.content-post -->
                                </li>

                                <li>
                                    <div class="thumb">
                                        <span class="overlay-pop"></span>
                                        <a href="blog.html">
                                            <img src="images/news/image-small-02.png" alt="">
                                        </a><!-- /.thumb -->
                                    </div><!-- /.row -->
                                    <div class="text">
                                        <h4>
                                            <a href="blog.html" title="">Why your sales forecast is off</a>
                                        </h4>
                                        <div class="entry-post">
                                            <p>January 11, 2017</p>
                                        </div>
                                    </div><!-- /.content-post -->
                                </li>

                                <li>
                                    <div class="thumb">
                                        <span class="overlay-pop"></span>
                                        <a href="blog.html">
                                            <img src="images/news/image-small-03.png" alt="">
                                        </a><!-- /.thumb -->
                                    </div><!-- /.row -->
                                    <div class="text">
                                        <h4>
                                            <a href="blog.html" title="">6 tips to retain your top sales talent</a>
                                        </h4>
                                        <div class="entry-post">
                                            <p>January 11, 2017</p>
                                        </div>
                                    </div><!-- /.content-post -->
                                </li>

                                <li>
                                    <div class="thumb">
                                        <span class="overlay-pop"></span>
                                        <a href="blog.html">
                                            <img src="images/news/image-small-04.png" alt="">
                                        </a><!-- /.thumb -->
                                    </div><!-- /.row -->
                                    <div class="text">
                                        <h4>
                                            <a href="blog.html" title="">What the martian can teach sales</a>
                                        </h4>
                                        <div class="entry-post">
                                            <p>January 11, 2017</p>
                                        </div>
                                    </div><!-- /.content-post -->
                                </li>
                            </ul>
                        </aside><!-- /.widget-recent-news -->
                        </div><!-- /.slidebar-news -->
                    </div><!-- /.col-md-4 -->

				</div><!-- /.row -->

			</div><!-- /.container -->
		</section><!-- /.flat-news -->

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
		<script src="{{ asset('js/app.js') }}"></script>


	</body>

<!-- Mirrored from corpthemes.com/html/finance/ by HTTrack Website Copier/3.x [XR&CO'2013], Tue, 18 Jul 2017 15:47:52 GMT -->
</html>