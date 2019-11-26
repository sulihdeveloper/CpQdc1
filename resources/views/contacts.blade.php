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
                <li><a href="">About</a></li>
                <li><a href="{!! url('/capability') !!}">Capabilities</a></li>
                <li><a href="">News</a></li>
                <li><a href="#">Carrers</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
</body>

<section id="intro3">
    <div class="intro-content">
        <h2></h2>
        <h3></h3>
        <div>
            <a href="" class="btn btn-default page-scroll">More</a>
        </div>
    </div>
</section>

<br>
<br>
<br>
<!-- map -->
<section id="section-map" class="clearfix">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1718602850483!2d106.8241704138113!3d-6.241067295482373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3dc5aaef733%3A0x7064d74d810c5e76!2sPT%20Qdc%20Technologies!5e0!3m2!1sid!2sid!4v1573635247003!5m2!1sid!2sid" width="1999" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></section>
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
                            <input name="add" type="submit" value="Add" class="btn btn-theme input-lg">
                        </div>

                    </form>
                </div>
            </div>
            <!-- ./span12 -->
        </div>

    </div>
</section>

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

</body>

</html>
@endsection
