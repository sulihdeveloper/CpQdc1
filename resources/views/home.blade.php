@extends('layouts.app1')

@section('content')
    <!-- BASICS -->
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../public/slides/favicon.png">
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
                <li class="active"><a href="{!! url('/') !!}">Home</a></li>
                <li><a href="{!! url('/bout') !!}">About</a></li>
                <li><a href="{!! url('/capabilities') !!}">Capabilities</a></li>
                <li><a href="{!! url('/berita') !!}">News</a></li>
                <li><a href="{!! url('/formcarrer') !!}">Carrers</a></li>
                <li><a href="{!! url('/contacts') !!}">Contact</a></li>
            </ul>
        </div>
</div>
</div>
</body>

    <video  width="1520" height="568" autoplay loop controls muted>
        <source src="{{URL::asset("../public/img/video.mp4")}}" type="video/mp4"/>
    </video>

<section>
    <section id="news" id="id">
            <div class="section-header">
                @foreach($news as $k=>$nw)
                <div class="float-center mar-right20">
                <div class="col-lg-4 col-md-6 col-xs-10 wow bounceInUp" data-wow-duration="2.4s">
                <div class="row">
                <div class="box">
                        <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                            <div class="float-left mar-right20">
                                <a href="{!! url ('/view_berita',$nw->id) !!}" class="fa fa-newspaper-o">News</a>
                            </div>
                        </div>
                    <h4 class="title"><a href="{!! url ('/view_berita',$nw->id) !!}">{{ str_limit($nw->judul,$limit = 20, $end = 'more')  }}</a></h4>
                    <h6><b>Created at Admin QDC ( {{$nw->created_at->format('d F Y')}} )</b></h6>
          </div>
          </div>
          </div>
          </div>
    @endforeach
    </div>
</section>
</section>

    <!--==========================
      About Us Section
    ============================-->
<section id="about">
    <div class="container">
        <header class="section-header">
            <h2>PT. Qdc Technologies</h2>
            <h5> began operation in July 2003, spawned by the withdraw from Indonesia of a multinational telecommunication company.</h5>
        </header>
        <br>
        @foreach($post as $item)
        <div class="row about-container">
            <div class="col-lg-6 content order-lg-1 order-2">
                <div style='text-align:justify; font-size: 14px;'>began operation in July 2003, spawned by the withdraw from Indonesia of a multinational telecommunication company, a group of ex employees formed Qdc Technologies and is now providing high quality telecommunications and power infrastructure services in Indonesia. Capitalizing on business relationships, highly valued and professional staff in addition to extensive knowledge of the Indonesia telecommunications and power infrastructure market developed over many years, Qdc Technologies is uniquely positioned to deliver high quality competitive and flexible products and services to the market.</div>
                <div class="icon-box wow fadeInUp">
                    <div class="icon"><i class="fa fa-shopping-bag"></i></div>
                    <h4><a href=""> {{$item->section_one}}</a></h4>
                    <div style='text-align:justify; font-size: 14px;'>{!! html_entity_decode($item->section_two)!!} </div>
                    </div>
            </div>
            <div class="col-lg-4 background order-lg-3 order-2 ">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Ya9kj2-FyFQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
        @endforeach
</section>
<!-- #about -->

    <!-- #capability -->
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="img-border">
                        <img src="img/images.jpg" alt="Image" class="img-fluid" width="550" height="568">
                    </div>
                </div>
                <div class="col-lg-5 ml-auto">

                    <h2 class="font-weight-bold text-black mb-5">Why Us</h2>
                    <div style='text-align:justify; font-size: 14px;'>Qdc’s specialist capabilities have been gained from unique experiences within the delivery of large-scale telecommunications projects. These skills have been developed to ensure that a client’s operational network is delivered with minimal risk and maximum peace of mind.</div>
                    <div class="accordion" id="accordionExample">
                        @foreach($capability as $value)
                        <h2 class="mb-0 border rounded mb-2">
                            <button class="btn " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ $value->judul }}
                            </button>
                        </h2>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <div style='text-align:justify; font-size: 14px;'>{!! html_entity_decode($value->isi) !!}</div>                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


<!--==========================
  Clients Section
============================-->

    <section id="clients" class="section-bg">
    <div class="container">
        <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Our CLients</h2>
        </div>
    </div>
        @foreach($clien as $k=>$nw)
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="client-logo">
                    <img src="{{ URL::to('/') }}/images/{{ $nw->photo }}" width="100px" height="120px" class="img-fluid" alt="">
                </div>
            </div>
        @endforeach
        </div>
    </div>
    </section>
<br/><br/><br/><br/><br/><br/>
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
                            <li><a href="{!! url('/capabilities') !!}">Capability</a></li>
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
                        </div></form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                COPYRIGHT © 2019 <strong>. QDC TECHNOLOGIES </strong>
            </div>
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
                -->
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
