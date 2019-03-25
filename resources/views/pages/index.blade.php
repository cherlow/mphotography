@extends('layouts.pageslayout')
@section('top-content')
<div class="animate-box">
        <h1 class="holder"><span>Musyoka Photography</span></h1>
        <p>Quality Photoshoot sessions since</p>
        <p>27.03.2015 </p>
        <p><a data-toggle="modal" data-target="#modal-danger" class="btn btn-primary btn-custom">Book a Session</a></p>
    </div>


@endsection
@section('content')


<div id="colorlib-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-camera4"></i>
                    </span>
                    <div class="desc">
                        <h2>Photography</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-image2"></i>
                    </span>
                    <div class="desc">
                        <h3>Image Processing</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="icon-video3"></i>
                    </span>
                    <div class="desc">
                        <h3>Videography</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-about-flex">
    <div class="col-half about-flex-img animate-box" style="background-image: url(/storage/app_images/insta-5.jpg);"></div>
    <div class="col-half">
        <div class="row">
            <div class="col-md-12 col-md-pull-2 animate-box">
                <div class="about-desc">
                    <h2>We Are Musyoka Photography </h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@if(count($images)>0)
<br>
<div class=" box_1620" style="margin:10px">
    <h1 class="text-center">Gallery<h1>
        <div class="gallery_f_inner row imageGallery1">
            @foreach($images as $image)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="h_gallery_item">
                <img src="/storage/event_images/{{$image->name}}" alt="">
                    <div class="hover">
                        <a href="javascript:void(0)">
                        <h4>{{$image->category}}</h4>
                            <br>
                        <span class="label label-success" style="font-size:20px">{{$image->tag}}</span>
                            <br>

                        </a>
                    <a class="light" href="/storage/event_images/{{$image->name}}"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="text-center"><a class="btn btn-primary" href="/gallery"> see Gallery</a></div>


        </div>
    </div>

   
            <div id="appi">
            <bloglist></bloglist>
            </div>
     
     <!--================Service Area =================-->
     <section class="service_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2 class="text-center">Why we are the best</h2>

        		</div>
        		<div class="row service_inner">
        			<div class="col-lg-4 col-md-6 col-sm-6">
        				<div class="service_item">
        					<a href="javascript:void(0)"><h4>Expert Technicians</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6 col-sm-6">
        				<div class="service_item">
        					<a href="#"><h4>Professional Service</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6 col-sm-6">
        				<div class="service_item">
        					<a href="#"><h4>Great Support</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6 col-sm-6">
        				<div class="service_item">
        					<a href="#"><h4>Technical Skills</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6 col-sm-6">
        				<div class="service_item">
        					<a href="#"><h4>Highly Recomended</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        			<div class="col-lg-4 col-md-6 col-sm-6">
        				<div class="service_item">
        					<a href="#"><h4>Positive Reviews</h4></a>
        					<p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Service Area =================-->

@endif
<section id="testimonial" class="section">
        <div class="container">
          <div class="row">
            <div class="touch-slider" class="owl-carousel owl-theme">
              @if(count($reviews)>0)
              @foreach($reviews as $review)
              <div class="item active text-center">
              <img class="img-member" src='storage/app_images/avatar04.png' alt="">
                <div class="client-info">
                 <h2 class="client-name" style="color:goldenrod">{{$review->name}}
                   <span>
                     (
                    Client
                     )


                   </span>
                 </h2>
                </div>

                <p><br><i class="fa fa-quote-left quote-left w3-hide-small"></i>{!!$review->review!!}  </p>
              </div>
              @endforeach
              @else
              <p><i>No reviews yet...Leave a review</i> </p>
              @endif

            </div>
          </div>
        </div>
      </section>
      <br>
      <div class="text-center">
        
            <div class="newsletter-subscribe">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">Subscribe for our Newsletter</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div>
            <form class="form-inline" method="post">
            {{csrf_field()}}
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Your Email"></div>
                <div class="form-group"><button class="btn btn-primary" type="submit">Subscribe </button></div>
            </form>
        </div>
    </div>
      </div>




@endsection
