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
                <li><a href="{!! url('/capability') !!}">Capabilities</a></li>
                <li><a href="{!! url('/berita') !!}">News</a></li>
                <li><a href="{!! url('/formcarrer') !!}">Carrers</a></li>
                <li class="active"><a href="{!! url('/contacts') !!}">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
</body>

<section id="intro4">
   </section>

<br>
<br>
<br>
<!-- map -->
<section class="col-lg-7 col-md-10" id="section-map" class="clearfix">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1718602850483!2d106.8241704138113!3d-6.241067295482373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3dc5aaef733%3A0x7064d74d810c5e76!2sPT%20Qdc%20Technologies!5e0!3m2!1sid!2sid!4v1573635247003!5m2!1sid!2sid" width="699" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe></section>

    <div class="col-lg-3 col-md-6 footer-contact">
        <h2>Contact Us</h2>
        <p>
            <b>Gedung Graha Qdc Blok C</br>
                Jl. Mampang Prapatan Raya No.28 Jakarta Selatan 12790</b></br>
            <strong>Phone:</strong> (021) 79191234 / (021) 79193333<br>
            <strong>Email:</strong> info@qdc.co.id<br>
        </p>
    </div>
    <div class="col-lg-3 col-md-6 footer-newsletter">
        <b>Follow </b>
        <div class="social-links">
            <a href="https://www.facebook.com/pages/PT-Qdc-Technologies/110904425594975" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
            <a href="https://www.instagram.com/qdctechnologies/?hl=id" class="icoInstagram" title="Instagram"><i class="fa fa-instagram"></i></a></li>
            <a href="https://www.linkedin.com/company/pt-qdc-technologies/about/" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            <a href="https://github.com/pt-qdc-technologies" class="icoGithub" title="Github"><i class="fa fa-github-alt"></i></a></li>
        </div>
    </div>
    </section>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- contact -->
<section id="section-contact" class="section appear clearfix">
    <div class="container">
        <div class="row mar-bot40">
            <div class="col-md-offset-3 col-md-6">
                <div class="section-header">
                    <h2 class="section-heading animated" data-animation="bounceInUp">Contact us</h2>
                   </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="cform" id="contact-form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form method="post" action="{{ route('contact.store') }}"  class="contactForm">
                        @csrf
                        <div class="field your-name form-group">
                            <input type="text" name="name" placeholder="Your Name" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            <div class="validation"></div>
                        </div>
                        <div class="field your-email form-group">
                            <input type="text" name="email" placeholder="Your Email" class="cform-text" size="40" data-rule="email" data-msg="Please enter a valid email">
                            <div class="validation"></div>
                        </div>
                        <div class="field subject form-group">
                            <input type="text" name="subject" placeholder="Subject" class="cform-text" size="40" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                            <div class="validation"></div>
                        </div>

                        <div class="field message form-group">
                            <textarea name="message" class="cform-textarea" cols="40" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                            <div class="validation"></div>
                        </div>

                        <div class="send-btn">
                            <input name="add" type="submit" value="Send" class="btn btn-theme input-lg">
                        </div>

                    </form>
                </div>
            </div>
            <!-- ./span12 -->
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
                            <li><a href="{!! url('/capability') !!}">Capability</a></li>
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
                        </form>
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
