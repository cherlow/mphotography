@extends('layouts.pageslayout')
@section('top-content')
<div class="animate-box">
        <h1 class="holder"><span>Contact</span></h1>
        <p>Quality Photoshoot sessions since</p>
        <p>27.03.2015 </p>
        <p><a data-toggle="modal" data-target="#modal-danger" class="btn btn-primary btn-custom">Book a Session</a></p>
    </div>

@endsection
@section('content')

<div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-8 animate-box">
                    <h2>Contact Information</h2>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="contact-info-wrap-flex">
                                <div class="con-info">
                                    <p><span><i class="icon-location-2"></i></span> 198 West 21th Street, <br> Suite 721 New York NY 10016</p>
                                </div>
                                <div class="con-info">
                                    <p><span><i class="icon-phone3"></i></span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                                </div>
                                <div class="con-info">
                                    <p><span><i class="icon-paperplane"></i></span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                                </div>
                                <div class="con-info">
                                    <p><span><i class="icon-globe"></i></span> <a href="#">yourwebsite.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-md-pull-4 animate-box">
                    <h2>Get In Touch</h2>
                    @if(auth()->guest())
                    <form action="/messagepost" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="mode" value="unli">
                        <div class="row form-group">
                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
                                <input type="text" name="name" id="fname" class="form-control" placeholder="Your firstname" required>
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
                                <input type="text" id="lname" class="form-control" placeholder="Your lastname (optional)">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your email address" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Your subject of this message" required>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                    </form>	
                    @else
                    <form action="/messagepost" method="post">
                        {{csrf_field()}}
                        <input type="hidden" name="mode" value="uli">
                            <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="name">Email</label> -->
                                    <p>Send Message as <b>{{auth()->user()->name}}</b></p>
                                    </div>
                                </div>
        
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="subject">Subject</label> -->
                                        <input type="text" name="subject" id="subject" class="form-control" placeholder="subject of this message" required>
                                    </div>
                                </div>
        
                                <div class="row form-group">
                                    <div class="col-md-12">
                                        <!-- <label for="message">Message</label> -->
                                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something to us" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="submit" value="Send Message" class="btn btn-primary">
                                </div>
                    </form>
                    
                    @endif	
                </div>
            </div>
        </div>
    </div>
@endsection
