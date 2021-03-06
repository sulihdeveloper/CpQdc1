@extends('layouts.app1')

@section('content')
    <!-- BASICS -->
    <meta charset="utf-8">
    <title>QDC Technologies</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen">
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
                    <li><a href="{!! url('/') !!}">Home</a></li>
                    <li><a href="{!! url('/bout') !!}">About</a></li>
                    <li class="active"><a href="{!! url('/capabilities') !!}">Capabilities</a></li>
                    <li><a href="{!! url('/berita') !!}">News</a></li>
                    <li><a href="{!! url('/formcarrer') !!}">Carrers</a></li>
                    <li><a href="{!! url('/contacts') !!}">Contact</a></li>
                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>


    <section id="intro2">
        <div class="intro-content">
            <h2>Capabilities</h2>
        </div>
    </section>

    <!-- about -->
    <section id="about" class="section appear clearfix">
        <div class="container">
            <div class="row mar-bot">
                <div class="col-md-offset-1 col-md-9">
                    <div class="section-header">
                        <h2 class="section-heading animated" data-animation="bounceInUp">Specialist Service Capabilities</h2>
                        <h5>Qdc’s specialist capabilities have been gained from unique experiences within the delivery of large-scale telecommunications projects. These skills have been developed to ensure that a client’s operational network is delivered with minimal risk and maximum peace of mind.</h5>
                    </div>
                </div>
            </div>
        </div>

        <section id="news">
            <div class="container">
            <div class="section-header">
                @foreach($capability as $value)
                    <div class="float-center mar-right20">
                        <div class="col-lg-4 col-md-6">
                                    <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                                        <div class="float-left mar-right20">
                                            <img src={{url('images/'.$value->image)}} width="120" height="100">
                                        </div>
                                    </div>
                                    <h4 class="title">{{ $value->judul }}</h4>
                                    <div style='text-align:justify; font-size: 14px;'>{!! html_entity_decode($value->isi) !!}</div>
                                </div>
                            </div>
                @endforeach
            </div>
            </div>
        </section>

    <!--==========================
                    Footer
        ============================-->
    <section id="footer" class="section-footer">
        <div class="footer-top">
            <div class="container">
                <br/><br/><br/>
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-info">
                        <p>About Us</p>
                        <p>PT. Qdc Technologies began operation in July 2003, spawned by the withdraw from Indonesia of a multinational telecommunication company.</p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <p>Useful Links</p>
                        <ul>
                            <li><a href="{!! url('/') !!}">Home</a></li>
                            <li><a href="{!! url('/bout') !!}">About us</a></li>
                            <li><a href="{!! url('/capabilities') !!}">Capabilitties</a></li>
                            <li><a href="{!! url('/berita') !!}">News</a></li>
                            <li><a href="{!! url('/contacts') !!}">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <p>Contact Us</p>
                        <p>
                            Gedung Graha Qdc Blok C</br>
                            Jl. Mampang Prapatan Raya No.28 Jakarta Selatan 12790</br>
                            <strong>Phone:</strong> (021) 79191234 / (021) 79193333<br>
                            <strong>Email:</strong> info@qdc.co.id<br>
                        </p>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-newsletter">
                        <p>Follow </p>
                        <div class="social-links">
                            <a href="https://www.facebook.com/pages/PT-Qdc-Technologies/110904425594975" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <a href="https://www.instagram.com/qdctechnologies/?hl=id" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                            <a href="https://www.linkedin.com/company/pt-qdc-technologies/about/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <a href="https://github.com/pt-qdc-technologies" class="icoGithub" title="Github"><i class="fa fa-github-alt"></i></a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                COPYRIGHT © 2019 <strong>. QDC TECHNOLOGIES </strong>
            </div>
        </div>
    </section>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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
