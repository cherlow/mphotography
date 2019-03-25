@extends('layouts.pageslayout')
@section('top-content')
<div class="animate-box">
        <h1 class="holder"><span>Event Details</span></h1>
        <h3 class="text-danger">random photo session for free arounf bandana road starting now</h3>
        <p>27.03.2018</p>
        <p><a href="gallery.html" class="btn btn-primary btn-custom">Book a Session</a></p>
    </div>
@endsection
@section('content')
{{-- blog content starts here --}}
<!--================Blog Area =================-->
<section class="blog_area single-post-area">
    <div class="" style="">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post row">
                    <div class="col-lg-12">

                        {{-- <div class="feature-img">
                        <img class="img-responsive" src="/storage/event_images/{{$images[1]->name}}" alt="">
                        </div>									  --}}
                          
                    </div>
                    <div class="col-lg-3  col-md-3 col-sm-3">
                        <div class="blog_info text-right">
                            
                            <ul class="blog_meta list">
                                <li><a href="#">Admin<i class="fa fa-user"></i></a></li>
                                
                                <li><a href="#">50<i class="fa fa-heart"></i></a></li>
                                <li><a href="javascript:void(0);" onclick="document.getElementById('message').focus()">6<i class="fa fa-comments"></i></a></li>
                            </ul>
                            <ul class="social-links">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-github"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 blog_details">
                    <h2>{{$event->title}}</h2>
                        
                    <div>
                        {!!$event->description!!}
                    </div>
                     {{-- images go in here --}}
                     <div>
                            <div id="{{$event->id}}" class="carousel slide" data-ride="carousel">
                                    
                                    <div class="carousel-inner">
                                      <?php
                                      $num=0; 
                                      ?>
                                      @foreach($images as $image)
                                      @if($num < 1)
                                      <div class="item active">
                                      <img src="/storage/event_images/{{$image->name}}" alt="Third slide" class="img-responsive">
                                      
                      
                                        </div>
                                      
                                      @else
                                      <div class="item">
                                      <img src="/storage/event_images/{{$image->name}}" alt="Third slide">
                      
                                        </div>
        
                                      @endif
                                      <?php $num++; ?>
                                      @endforeach
                                      
                                     
                                 
                                    </div>
                                    <a class="left carousel-control" href="#{{$event->id}}" data-slide="prev">
                                      <span class="fa fa-angle-left"></span>
                                    </a>
                                    <a class="right carousel-control" href="#{{$event->id}}" data-slide="next">
                                      <span class="fa fa-angle-right"></span>
                                    </a>
                                  </div>
                {{-- images end here --}}

                    </div>
                 
                </div>
                
                <div class="comments-area">
                    @if(count($comments)<1)
                    <p><i>There are no comments Yet...Leave a comment</i></p>
                    @else
                    <h4>{{count($comments)}} Comments</h4>
                    @foreach($comments as $comment)

                    <div class="container comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="/storage/app_images/avatar04.png" alt="user_avatar" height="60px">
                                </div>
                                <div class="desc">
                                <h5><a href="javascript:void(0)">{{$comment->commentor_body}}</a></h5>
                                    <p class="date">{{$comment->created_at}} </p>
                                    <p class="comment">
                                        {{$comment->comment}}
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    @endforeach
                    @endif
                 	
                    
                	                                             				
                </div>
                <div class="comment-form">
                    <h4>Leave a comment</h4>
                    @if(auth()->guest())
                    <form method="post" action="/eventcomment">

                        {{csrf_field()}}
                        <input type='hidden' name="mode" value="unli"/>
                        <input type='hidden' name="post" value="{{$event->id}}">
                        <div class="form-group">
                          <div class="form-group col-lg-6 col-md-6 name">
                            <input type="text" class="form-control input-lg" id="name" name='name' placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'" required>
                          </div>
                          <div class="form-group col-lg-6 col-md-6 email">
                            <input type="email" class="form-control input-lg" id="email" name='email' placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required>
                          </div>	
                          
                          								
                        </div>
                        
                        
                        <div class="form-group">
                            <textarea class="form-control mb-10" rows="5" name="message" id="message" placeholder="Comment..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        </div>
                        <button type="submit" class="primary-btn button_hover">Post Comment</button>	
                    </form>
                    @else
                    <form action='/eventcomment' method='post'>
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type='hidden' name="mode" value="uli"/>
                        <input type='hidden' name="post" value="{{$event->id}}">
                        </div>
                        <div class="form-group">
                            <p>Comment as <b>{{auth()->user()->name}}</b>
                        </div>
                         
                        <div class="form-group">
                                <textarea class="form-control mb-10" rows="5" name="message" id="message" placeholder="Comment..." onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <button type="submit" class="primary-btn button_hover">Post Comment</button>	
                    </form>
                    @endif
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget text-center" style="width:100%">
                            <form style="width:100%">
                            <div class="input-group" style="width:100%">
                                <input type="text" class="form-control" placeholder="Search Posts" class="xwxyz">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                       
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget author_widget">
                        <img class="author_img img-circle" src="/storage/app_images/avatar04.png" alt="">
                        <h4>Paul Musyoka</h4>
                        <p>Senior blog writer</p>
                        <div class="social_icon">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-github"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </div>
                        <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits detractors.</p>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Popular Posts</h3>
                        @if(count($populars) < 1)
                        <i>There no popular posts Yet</i> 
                        @else
                        @foreach($populars as $popular)
                        <div class="media post_item">
                        <img src="/storage/app_images/{{$popular->cover_pic}}" alt="post" height="80px">
                                <div class="media-body">
                                <a href="/blogdetails/{{$popular->id}}"><h3>{{$popular->name}}</h3></a>
                                <p>{{$popular->created_at}}</p>
                                </div>
                            </div>
                            @endforeach
                        @endif
                       
                        
                        
                        <div class="br"></div>
                    </aside>
                    
                    
                    <aside class="single-sidebar-widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Adventure</a></li>
                        </ul>
                    </aside>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
{{-- blog content ends here --}}
@endsection