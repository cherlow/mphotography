@extends('layouts.pageslayout')
@section('top-content')
<div class="animate-box">
        <h1 class="holder"><span>Services</span></h1>
        <p>Quality Photoshoot sessions since</p>
        <p>27.03.2015 </p>
        <p><a data-toggle="modal" data-target="#modal-danger" class="btn btn-primary btn-custom">Book a Session</a></p>
    </div>

@endsection
@section('content')

 <!--================Service Area =================-->
 <br>
 <section class="service_area p_120">
        <div class="container">
            <div class="row service_inner">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service_item">
                        <i class="fa fa-camera"></i>
                        <a href="#"><h4>Photography</h4></a>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service_item">
                        <i class="fa fa-picture-o"></i>
                        <a href="#"><h4>Image Maipulation</h4></a>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service_item">
                        <i class="fa fa-video-camera"></i>
                        <a href="#"><h4>Videography</h4></a>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service_item">
                        <i class="fa fa-film"></i>
                        <a href="#"><h4>Cinematography</h4></a>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service_item">
                        <i class="fa fa-camera-retro"></i>
                        <a href="#"><h4>Pro Photoshoot</h4></a>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service_item">
                        <i class="fa fa-bullhorn"></i>
                        <a href="#"><h4>Digital Media</h4></a>
                        <p>Usage of the Internet is becoming more common due to rapid advancement of technology and power.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Service Area =================-->
    <div class="text-center"><button class="btn btn-primary">Book A session</button></div>
@endsection
