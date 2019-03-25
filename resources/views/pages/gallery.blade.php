@extends('layouts.pageslayout')
@section('top-content')
<div class="animate-box">
        <h1 class="holder"><span>Gallery</span></h1>
        <p>Quality Photoshoot sessions since</p>
        <p>27.03.2015 </p>
        <p><a data-toggle="modal" data-target="#modal-danger" class="btn btn-primary btn-custom">Book a Session</a></p>
    </div>

@endsection
@section('content')
@if(count($images)>0)
<br>
<div class=" box_1620" style="margin:10px">
        <div class="gallery_f_inner row imageGallery1">
            @foreach($images as $image)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="h_gallery_item">
                <img src="/storage/event_images/{{$image->name}}" alt="">
                    <div class="hover">
                        <a href="javascript:void(0)">
                        <h4>{{$image->category}}</h4>
                            <br>
                        <span class="label label-success">{{$image->tag}}</span>
                            <br>
                        
                        </a>
                    <a class="light" href="/storage/event_images/{{$image->name}}"><i class="fa fa-expand"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endif
@endsection
