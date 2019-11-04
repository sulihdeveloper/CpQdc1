@extends('layouts.front')

@section('content')
<div id="fullpage">
   <div class="section" id="intro">
       <div id="mycarousel" class="carousel slide" data-ride="carousel">
               <!-- Wrapper for slides -->
               <div class="carousel-inner" role="listbox">
               @foreach($slide as $sl)
                 <div class="item">
                     <img src="{{asset('slides/'.$sl->image)}}" data-color="lightblue" alt="First Image">
                     <div class="carousel-caption">
                        <h1>{{$sl->title}}</h1>
                        <p class="intro-text">{{$sl->description}}</p>
                        <a href="{{$sl->link}}" class="btn btn-default page-scroll">More</a>
                     </div>
                 </div>
                 @endforeach

               <!-- Controls -->
               <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                 <span class="fa fa-chevron-left" aria-hidden="true"></span>
                 <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                 <span class="fa fa-chevron-right" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
               </a>
             </div>
           <!-- end -->

   </div>
   <div class="section" id="ab">
    <div class="col-md-12">
      <div class="container">
        <div class="content">
         <h1>About Us</h1>
         <hr>
          @foreach($about as $ab)
         <div class="col-md-12">
           <div class="row">
             <div class="col-md-4">
               <h4>Who we are</h4>
               <p>{{$ab->section_one}}</p>
             </div>
             <div class="col-md-4">
               <h4>What we do</h4>
               <p>{{$ab->section_two}}</p>
             </div>
             <div class="col-md-4">
             <img src="{{url('images/'.$ab->image)}}" class="img-responsive">
             </div>
           </div>
         </div>
         @endforeach
        </div>
      </div>
    </div>
   </div>


   <div class="section" id="vimis">
     <div class="container">
       <div class="content">
           <div class="col-md-12">
           <h1>Vision and Misson</h1>
           @foreach($vision as $vis)
           <hr>
             <div class="row">
               <div class="col-md-4">
                 <img src="{{url('images/'.$vis->image)}}" class="img-responsive">
               </div>
               <div class="col-md-8">
                 <div class="row">
                   <div class="col-md-6">
                   <h4>Vision</h4>
                   <p>{{$vis->section_one}}</p>
                   </div>
                   <div class="col-md-6">
                     <h4>Mission</h4>
                     <p>{{$vis->section_two}}</p>
                   </div>
                 </div>
               </div>
             </div>
             @endforeach
           </div>
         </div>
       </div>
     </div>

     <div class="section" id="prod">
      <div class="col-md-12">
         <div class="container">
           <div class="content">
             <h1>Products</h1>
             <hr>
             <div class="col-md-3">
               <div class="categories">
                  <ul class="cat">
                    <li>
                      <ol class="type">
                      @foreach($category as $cat)
                        <li><a href="#" data-filter=".{{$cat->id}}">{{$cat->name}}</a></li>
                      @endforeach
                      </ol>
                    </li>
                  </ul>
               </div>
             </div>
             <div class="col-md-9">
               <div class="grid">
               @foreach($product as $prod)
                 <div class="col-md-3 col-xs-6 col-sm-6 items {{$prod->category_id}}" data-category="{{$prod->category_id}}">
                 <a href="http://{{$prod->link}}" target="_new">
                   <div class="portfolio-item">
                      <div class="hover-bg">
                        <div class="hover-text">
                          <h5>{{$prod->title}}</h5>
                        </div>
                        <img src="{{url('products/'.$prod->image)}}" class="img-responsive"></div>
                    </div>
                 </div>
                 </a>
                 @endforeach
               </div>
             </div>
           </div>
         </div>
      </div>
     </div>
     <div class="section" id="conts">
      <div class="col-md-12">
       <div class="container">
         <div class="content">
             <h1>Contact us</h1>
             <hr>
             <div class="col-md-12">
               <p class="text-center">
                 Fixie flexitarian irony yr bitters occupy schlitz, kale chips tbh you probably haven't heard of them normcore hexagon locavore copper mug.
               </p><br><br>
             </div>
             <div class="col-md-12">
               <div class="row">
                 <div class="col-md-6  col-md-offset-1">
                   <div class="map-responsive">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.0851025712236!2d106.82639128475962!3d-6.241285930783945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3dc5aaef733%3A0x7064d74d810c5e76!2sPT%20Qdc%20Technologies!5e0!3m2!1sid!2sid!4v1571196459473!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                   </div>
                 </div>
                 <div class="col-md-4">
                   <h4>QDC Technologies</h4>
                   <address>
                     Gedung Graha Qdc Blok C
                    Jl. Mampang Prapatan Raya No.28 Jakarta Selatan 12790<br>
                     <abbr title="Phone"><i class="fa fa-phone"> </i>:</abbr> (021) 791919234
                     <br>
                     <abbr title="Phone"><i class="fa fa-phone"> </i>:</abbr> (021) 79193333
                     <br>
                     <abbr title="email"><i class="fa fa-envelope"> </i>:</abbr> info@qdc.co.id
                   </address>
                 </div>
               </div>
               <br>
               <div class="col-md-12 social">
                 <h5>Follow Us</h5>
                   <ul class="list-inline">
                     <a href="#"><i class="fa fa-facebook"></i></a>
                     <a href="#"><i class="fa fa-twitter"></i></a>
                     <a href="#"><i class="fa fa-instagram"></i></a>
                     <a href="#"><i class="fa fa-linkedin"></i></a>
                   </ul>
               </div>
             </div>
         </div>

       </div>
      </div>
     </div>
     <div class="section fp-auto-height" id="foot">
         <div class="footer">
             <p>QDC Technologies &copy; 2019.</p>
         </div>
     </div>
   </div>
   @endsection
