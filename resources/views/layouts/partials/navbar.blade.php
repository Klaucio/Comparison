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
                                    <a href="index-2.html" title="">Home  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="index-2.html" title="">Home Classic Header</a></li>
                                        <li><a href="index-v3.html" title="">Home Widget Header</a></li>
                                        <li><a href="index-v2.html" title="">Home Modern Header</a></li>
                                        <li><a href="index-v4.html" title="">Home Transparent Header</a></li>
                                        <li><a href="index-layout2.html" title="">Home Layout 02</a></li>
                                        <li><a href="index-v5.html" title="">Home Layout 03</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="about-v1.html" title="">About  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="about-v1.html" title="">Our Team</a></li>
                                        <li><a href="about-v2.html" title="">Team Grid</a></li>
                                        <li><a href="about-v3.html" title="">Overview</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="services-v1.html" title="">Services  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="services-v1.html" title="">Services Grid</a></li>
                                        <li><a href="services-v2.html" title="">Risk Management</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="portfolio-v3.html" title="">Portfolio  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio-v3.html" title="">Portfolio Default</a></li>
                                        <li><a href="portfolio-v2.html" title="">Layout 02</a></li>
                                        <li><a href="portfolio-v1.html" title="">Portfolio Load More</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                                <li>
                                    <a href="blog.html" title="">News  <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html" title="">Blog</a></li>
                                        <li><a href="blog-single.html" title="">Blog Grid</a></li>
                                    </ul><!-- /.sub-menu -->
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