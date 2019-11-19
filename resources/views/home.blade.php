@extends('layouts.app1')

@section('content')
    <!-- BASICS -->
    <meta charset="utf-8">
    <title>QDC Technologies</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="js1/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="css1/isotope.css" media="screen">
    <link rel="stylesheet" href="css1/flexslider.css" type="text/css">
    <link rel="stylesheet" href="js1/fancybox/jquery.fancybox.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css1/bootstrap.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">

    <link rel="stylesheet" href="css1/style.css">
    <!-- skin -->
    <link rel="stylesheet" href="skin/default.css">
</head>

<body>
<div id="fullpage"></div>
<section id="header" class="appear"></section>
<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-bars color-white"></span>
            </button>
            <div class="navbar-logo">
                <a href="#"><img data-0="width:155px;" data-300=" width:120px;" src="img1/pp-removebg-preview.png" alt=""></a>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                <li><a href="">Home</a></li>
                <li><a href="">About</a></li>
                <li><a href="">Capabilities</a></li>
                <li><a href="">News</a></li>
                <li><a href="#">Carrers</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
</div>
</div>
</body>

<section id="intro">
    @foreach($slide as $sl)
    <div class="intro-content">
        <h2>{{$sl->title}}</h2>
        <h3>{{$sl->description}}</h3>
        <div>
        <a href="{{$sl->link}}" class="btn-get-started scrollto">More</a>
        </div>
    </div>
    @endforeach
</section>
<br>
<br>

<!--==========================
      About Us Section
    ============================-->
<section id="about">
    <div class="container">
        <header class="section-header">
            <h2>PT. Qdc Technologies</h2>
            <h4> began operation in July 2003, spawned by the withdraw from Indonesia of a multinational telecommunication company.</h4>
        </header>
        <br>
        <div class="row about-container">
            <div class="col-lg-6 content order-lg-1 order-2">
                <p>began operation in July 2003, spawned by the withdraw from Indonesia of a multinational telecommunication company, a group of ex employees formed Qdc Technologies and is now providing high quality telecommunications and power infrastructure services in Indonesia. Capitalizing on business relationships, highly valued and professional staff in addition to extensive knowledge of the Indonesia telecommunications and power infrastructure market developed over many years, Qdc Technologies is uniquely positioned to deliver high quality competitive and flexible products and services to the market.</p>
                <div class="icon-box wow fadeInUp">
                    <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                    <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
                </div>
                <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                    <div class="icon"><i class="fa fa-photo"></i></div>
                    <h4 class="title"><a href="">Magni Dolores</a></h4>
                    <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                </div>

                <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                    <div class="icon"><i class="fa fa-bar-chart"></i></div>
                    <h4 class="title"><a href="">Dolor Sitema</a></h4>
                    <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
                </div>
            </div>
            <div class="col-lg-4 background order-lg-3 order-2 ">
                <img src="img/about-removebg-preview.png" width=”50″ height=”40″ class="img-fluid" alt="">
            </div>
        </div>
    </div>
    </div>
</section>
<!-- #about -->

    <!--==========================
      Services Section
    ============================-->
    <section id="news" class="section-bg">
        <div class="container">
            <header class="section-header">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">News</h2>
                </div>
            </header>
            @foreach($news as $k=>$nw)
                <div class="row">
                    <div class="col-md-6 col-lg-4 offset-lg-5 wow bounceInUp" data-wow-duration="1.4s">
                        <div class="box">
                            <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                            <h4 class="title"><a href="">{{ $nw->judul }}</a></h4>
                            <p class="description">{{ str_limit($nw->isi, $limit = 250, $end = '...') }}.</p>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
    </section><!-- #services -->


    <!-- services -->
<section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-screen">screen</a>
                    </div>
                </div>
                <h3 class="text-bold">Responsive</h3>
                <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-location">location</a>
                    </div>
                </div>
                <h3 class="text-bold">Multi usage</h3>
                <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-images">images</a>
                    </div>
                </div>
                <h3 class="text-bold">Beautiful</h3>
                <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                <div class="clear"></div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-archive">archive</a>
                    </div>
                </div>
                <h3 class="text-bold">Valid HTML5</h3>
                <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-contract">Mobile</a>
                    </div>
                </div>
                <h3 class="text-bold">Modern</h3>
                <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                <div class="clear"></div>
            </div>

            <div class="col-lg-4">
                <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                    <div class="float-left mar-right20">
                        <a href="#" class="hi-icon hi-icon-clock">Faster</a>
                    </div>
                </div>
                <h3 class="text-bold">Fast loading</h3>
                <p>Lorem ipsum dolor sit amet, elit persecuti efficiendi sit ad.</p>

                <div class="clear"></div>
            </div>

        </div>
    </div>
</section>

<!--==========================
  Clients Section
============================-->
<section id="clients" class="section-bg"        >
    <div class="container">
        <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Our CLients</h2>
        </div>

        <div class="row no-gutters clients-wrap clearfix wow fadeInUp">
            <div class="col-lg-3 col-md-4 col-xs-4">
                <div class="client-logo">
                    <img src="img1/clients/pln.png" width="100px" height="120px" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-4">
                <div class="client-logo">
                    <img src="img1/clients/telk.png" width="100px" height="120px" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-4">
                <div class="client-logo">
                    <img src="img1/clients/sch.png" width="100px" height="120px" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-xs-4">
                <div class="client-logo">
                    <img src="img1/clients/lucent.png" width="125px" height="120px" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-4">
                <div class="client-logo">
                    <img src="img1/clients/ew.png" width="100px" height="120px" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>


<section id="footer" class="section footer">
    <div class="container">
        <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
            <div class="col-sm-12 align-center">
                <ul class="social-network social-circle">
                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="row align-center mar-bot20">
            <ul class="footer-menu">
                <li><a href="#">Home</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Get in touch</a></li>
            </ul>
        </div>
        <div class="row align-center copyright">
            <div class="col-sm-12">
                <p>&copy; Departemen IT, QDC Technologies</p>
            </div>
        </div>
    </div>

</section>
<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>

<!-- Javascript Library Files -->
<script src="js1/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="js1/jquery.js"></script>
<script src="js1/jquery.easing.1.3.js"></script>
<script src="js1/bootstrap.min.js"></script>
<script src="js1/jquery.isotope.min.js"></script>
<script src="js1/jquery.nicescroll.min.js"></script>
<script src="js1/fancybox/jquery.fancybox.pack.js"></script>
<script src="js1/skrollr.min.js"></script>
<script src="js1/jquery.scrollTo.min.js"></script>
<script src="js1/jquery.localScroll.min.js"></script>
<script src="js1/stellar.js"></script>
<script src="js1/jquery.appear.js"></script>
<script src="js1/jquery.flexslider-min.js"></script>

<!-- Template Main Javascript File -->
<script src="js1/main.js"></script>
@endsection
