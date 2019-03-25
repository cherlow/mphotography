@extends('layouts.pageslayout')
@section('top-content')
<div class="animate-box">
        <h1 class="holder"><span>Events</span></h1>
        <h3 class="text-danger">random photo session for free arounf bandana road starting now</h3>
        <p>27.03.2018</p>
        <p><a href="gallery.html" class="btn btn-primary btn-custom">Book a Session</a></p>
    </div>
@endsection
@section('content')


@if(count($events)>0)
<div class="colorlib-blog">
    <div class="" style="margin:10px">
        <div class="row row-pb-md">
@foreach($events as $event)


            <div class="col-md-4 animate-box">
                <article class="article-entry">
                {{-- <a href="/eventdetails/{{$event->id}}" class="blog-img" style="background-image: url(/storage/app_images/);"></a> --}}


                {{-- images go in here --}}
                <div>
                    <div id="{{$event->id}}" class="carousel slide" data-ride="carousel">
                            
                            <div class="carousel-inner">
                              <?php $imagges=$images->where('event_id',$event->id) ;
                              $num=0; 
                              ?>
                              @foreach($imagges as $image)
                              @if($num < 1)
                              <div class="item active">
                              <img src="/storage/event_images/{{$image->name}}" alt="Third slide">
                              
              
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
                
                    <div class="desc event-desc">
                    <h2><a href="/eventdetails/{{$event->id}}">{{$event->title}}( {{$event->location}})</a></h2>

                    <div class="">{!!$event->description!!}</div>
                    </div>
                    <div class="admin">
                    <p><span><i class="icon-user2"></i> by: Admin</span> <span><a href="#"><i class="icon-bubble3"></i> 10</a></span><span><a href="#"><i class="fa fa-heart"></i> 10</a></span></p>
                    </div>
                </article>
            </div>
@endforeach
        </div>
    </div>
</div>


@endif
@endsection
