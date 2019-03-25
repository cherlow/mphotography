@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     My Gallery
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Gallery</li>
    </ol>
  </section>
<br>

    <div class="margin">
            <div class="alert alert-success text-center" role="alert"><span>Waddup Admin, Populate your Gallery With Your Original Photos..Got some?</span>
                <a class="btn btn-primary" style="text-decoration:none" href="/feeds/create" type="button"><i class="fa fa-plus"></i>Upload Photos</a>
            </div>
      
        
{{-- images start here --}}
<br>
<div class="row">
    @if(count($images)<1)
    <p>there no Images Here...Try to Upload some</p>
    @else
    @foreach($images as $image)
    <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="thumbnail"><img src="/storage/event_images/{{$image->name}}" class="img-responsive">
                <div class="caption">
                    <h5> <span class="label label-default">{{$image->tag}} </span><span class="label label-success">{{$image->category}} </span></h5>
                    <div>
                        <div class="btn-group" role="group">
                            
                            <button
                            onclick="
                                            var result=confirm('are you sure you want to delete this image?')
                                            if(!result){
                                                event.preventDefault();
                                            }
                                            else{
                                              document.getElementById('<?php echo $image->id ?>').submit();
                                            }
                                            "
                             class="btn btn-primary btn-xs" type="button"><i class="fa fa-trash-o"></i> Delete</button>
                            <form class="pull-right hidden" method="POST" action="/feeds/delete/{{$image->id}}" id="{{$image->id}}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                           
                                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @endif
     
        
    </div>
{{-- images end here --}}

    </div>
    @endsection