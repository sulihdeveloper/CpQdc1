@extends('layouts.app1')

@section('content')
    <!-- BASICS -->
<head>
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
<div id="fullpage"></div>
<section id="header" class="appear">
<div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px; background-color:rgba(5, 42, 62, 1);">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="fa fa-bars color-white"></span>
            </button>
            <div class="navbar-logo">
                <a href="#"><img data-0="width:155px;" data-300="width:120px;" src="img1/pp-removebg-preview.png" alt=""></a>
            </div>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
                <li class="active"><a href="{!! url('/') !!}">Home</a></li>
                <li><a href="{!! url('/bout') !!}">About</a></li>
                <li><a href="{!! url('/capabilities') !!}">Capabilities</a></li>
                <li><a href="{!! url('/berita') !!}">News</a></li>
                <li><a href="{!! url('/formcarrer') !!}">Carrers</a></li>
                <li><a href="{!! url('/klien') !!}">Our Client</a></li>
                <li><a href="{!! url('/contacts') !!}">Contact</a></li>
            </ul>
        </div>
</div>
</div>
</section>

    <video  width="100%" height="auto" autoplay loop controls muted>
        <source src="{{URL::asset("../img/video.mp4")}}" type="video/mp4"/>
    </video>
<div>

</div>
</body>
    <br/><br/><br/>
    <!--==========================
                  produk
    ============================-->
    <section>
        <div class="col-lg-6 col-md-6">
            <div class="list-group-item action active">Product</div>
            <br/>
            <style>
                /* Make the image fully responsive */
                .carousel-inner img {
                    width: 100%;
                    height: 100%;
                }
            </style>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

            <div id="demo" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://drive.google.com/uc?export=download&id=17MKwEHxWd-OCPx9P2LsTBBR0kNR__aCe" alt="Gambar - 1" width="1280" height="700">
                        <div class="carousel-caption">
                            <h3>Slide 1</h3>
                            <p>Deskripsi Slide 1</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://drive.google.com/uc?export=download&id=1m3O0HLyKQPO-MOFcSNtP4EqpenycEQaC" alt="Gambar - 2" width="1280" height="700">
                        <div class="carousel-caption">
                            <h3>Slide 2</h3>
                            <p>Deskripsi Slide 2</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://drive.google.com/uc?export=download&id=1NSeFxs2MXhLfCU14qtqnRWce8LPJC6bR" alt="Gambar - 3" width="1280" height="700">
                        <div class="carousel-caption">
                            <h3>Slide 3</h3>
                            <p>Deskripsi Slide 3</p>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
            <!--==========================
                  produk
            ============================-->
    <div class="col-md-offset-7 footer-contact">
        <div class="list-group-item action active">News</div>
        @foreach($news as $k=>$nw)
            <div class="float-center mar-right20">
                <div class="container">
                <div class="col-lg-4 col-md-6 col-xs-10 wow bounceInUp" data-wow-duration="2.4s">
                            <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
                                <div class="float-left mar-right20">
                                    <a href="{!! url ('/view_berita',$nw->id) !!}" class="fa fa-newspaper-o">News</a>
                                </div>
                            </div>
                            <h4 class="title"><a href="{!! url ('/view_berita',$nw->id) !!}">{{ str_limit($nw->judul,$limit = 20, $end = 'more')  }}</a></h4>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    </section>

<br/><br/><br/><br/><br/>
<!--==========================
      Maps
============================-->
        <!-- ======= Our Services Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
            </div>
        </section><!-- End Our Services Section -->
            <div id="contact">
                <div class="container">
                    <div class="row">
                        <div id="dvMap" style=" width: 100%; height: 350px"></div>
                    </div>
                </div>
            </div>
            <script src="https://maps.googleapis.com/maps/api/js?key=" async defer></script>
            <script type="text/javascript">
                var markers = [
                        <?php
                        $DB_HOST='localhost';
                        $DB_USERNAME='root';
                        $DB_PASSWORD='';
                        $DB_DATABASE='db_blog';
                        $db=mysqli_connect($DB_HOST,$DB_USERNAME,$DB_PASSWORD,$DB_DATABASE);
                        $sql = mysqli_query($db, "SELECT * FROM maps");
                        while(($data =  mysqli_fetch_assoc($sql))) {
                        ?>
                    {
                        "name": '<?php echo $data['name']; ?>',
                        "tower": '<?php echo $data['tower']; ?>',
                        "lat": '<?php echo $data['lat']; ?>',
                        "lng": '<?php echo $data['lng']; ?>',
                        "alamat": '<?php echo $data['alamat']; ?>',
                        "provinsi": '<?php echo $data['provinsi']; ?>'
                    },
                    <?php
                    }
                    ?>
                ];
            </script>
            <script type="text/javascript">
                window.onload = function () {
                    var mapOptions = {
                        center: new google.maps.LatLng(-0.2249959,117.2822537),
                        zoom: 5,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    };
                    var infoWindow = new google.maps.InfoWindow();
                    var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
                    for (i = 0; i < markers.length; i++) {
                        var data = markers[i];
                        var latnya = data.lat;
                        var lngnya = data.lng;

                        var myLatlng = new google.maps.LatLng(latnya, lngnya);
                        var marker = new google.maps.Marker({
                            position: myLatlng,
                            map: map,
                            title: data.alamat
                        });
                        (function (marker, data) {
                            google.maps.event.addListener(marker, "click", function (e) {
                                infoWindow.setContent('<b>Name</b> :' + data.name + '<br>' +'<b>Tower</b> :' +data.tower+ '<br>' + data.alamat);
                                infoWindow.open(map, marker);
                            });
                        })(marker, data);
                    }
                }
            </script>

<!--==========================
  Clients Section
============================-->

    <section id="clients">
    <div class="container">
        <div class="section-header">
            <h2 class="section-heading animated" data-animation="bounceInUp">Our CLients</h2>
        @foreach($clien as $k=>$nw)
            <div class="container">
            <div class="col-lg-2 col-md-6">
                <div class="client-logo">
                    <img src="{{ URL::to('/') }}/images/{{ $nw->photo }}" width="100px" height="120px" class="img-fluid" alt="align-center">
                </div>
            </div>
        @endforeach
        </div>
        </div>
    </div>
    </section>
=    <!--==========================
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
