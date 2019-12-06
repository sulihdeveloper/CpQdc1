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
                    <li class="active"><a href="{!! url('/bout') !!}">About</a></li>
                    <li><a href="{!! url('/capability') !!}">Capabilities</a></li>
                    <li><a href="{!! url('/berita') !!}">News</a></li>
                    <li><a href="{!! url('/formcarrer') !!}">Carrers</a></li>
                    <li><a href="{!! url('/contacts') !!}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    </body>

    <section id="intro3">
        <div class="intro-content">
            <h2>About Us</h2>
            <h3></h3>
        </div>
    </section>
    <br/><br/><br/>
    <section id="about">
        <div class="container">
            <header class="section-header">
                <h2>PT. Qdc Technologies</h2>
                <h4> began operation in July 2003, spawned by the withdraw from Indonesia of a multinational telecommunication company.</h4>
            </header>
            <br>
            @foreach($post as $item)
                <div class="row about-container">
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <p>began operation in July 2003, spawned by the withdraw from Indonesia of a multinational telecommunication company, a group of ex employees formed Qdc Technologies and is now providing high quality telecommunications and power infrastructure services in Indonesia. Capitalizing on business relationships, highly valued and professional staff in addition to extensive knowledge of the Indonesia telecommunications and power infrastructure market developed over many years, Qdc Technologies is uniquely positioned to deliver high quality competitive and flexible products and services to the market.</p>
                        <div class="icon-box wow fadeInUp">
                            <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                            <h4 class="title"><a href=""> {{$item->section_one}}</a></h4>
                            <p class="description">{{$item->section_two}} </p>
                        </div>
                    </div>
                    <div class="col-lg-4 background order-lg-3 order-2 ">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/Ya9kj2-FyFQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
        </div>
        @endforeach
        </div>
    </section>
    <!-- #about -->
<br/><br/><br/><br/><br/><br/><br/>
    <section id="footer" class="section footer">
        <div class="container">
            <div class="row animated opacity mar-bot20" data-andown="fadeIn" data-animation="animation">
                <div class="col-sm-12 align-center">
                    <ul class="social-network social-circle">
                        <li><a href="https://www.facebook.com/pages/PT-Qdc-Technologies/110904425594975" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/qdctechnologies/?hl=id" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/pt-qdc-technologies/about/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://github.com/pt-qdc-technologies" class="icoGithub" title="Github"><i class="fa fa-github-alt"></i></a></li>
                    </ul>
                </div>
            </div>
            </br></br>
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

    </body>

    </html>
@endsection
