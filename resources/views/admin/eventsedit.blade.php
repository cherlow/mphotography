@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Events Edit
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Events Edit</li>
    </ol>
  </section>
  <br>
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title text-center">Edit This Event Post</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  
                        <div class="">
                        <form role="form" method="post" action="/events/{{$event->id}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT"/>
                                    
                                    <div class="form-group">
                                            <label class="control-label" for="user_id">Event Id</label>
                                    <input class="form-control" type="text" readonly="" name="user_id" value="#0{{$event->id}}">
                                        </div>
                                    <div class="form-group">
                                        <label class="control-label">Event Title</label>
                                    <input name="title" class="form-control" value="{{$event->title}}" type="text" placeholder="e.g Best Photoshoot techniques" required>
                                    </div>
                                    <div class="form-group">
                                            <label class="control-label">Event Location</label>
                                        <input name="location" class="form-control" value="{{$event->location}}" type="text" placeholder="e.g Best Photoshoot techniques" required>
                                        </div>
                                    <div class="form-group">
                                        <label class="control-label">Event Description</label>
                                    <textarea name="body" id="article-ckeditor" class="form-control" rows="8" placeholder="content" >{{$event->description}}</textarea>
                                    </div>

                                     <div class="form-group">
                                            <label class="control-label">Event Images</label>
                                    
                                            <div class="row">
                                                @if(count($images) < 0)
                                                <p>This post Has No Images</p>
                                                @else
                                                @foreach($images as $image)
                                                <div class="col-md-4 col-sm-4 col-xs-6">
                                                <div class="thumbnail"><img src="/storage/event_images/{{$image->name}}">
                                                            <div class="caption">
                                                                    <button onclick="
                                                                     var result=confirm('Are you sure you want to delete this image?');
                                                                    if( result ){
                                                                        event.preventDefault();
                                                                    document.dele.action='/images/{{$image->id}}';
                                                                    document.getElementById('dele').submit();
                                                                    }
                                                                                                            
                                                                    "
                                                                     class="btn btn-primary" type="button" role="button" ><i class="fa fa-remove"></i> remove</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                        
                                                    @endforeach
                                                @endif
                                                    
                                                 
                                                </div>
                                                    
                                                  
                                    
                                        </div> 
                                  
                                    
                                    <div class="btn-toolbar">
                                        <div class="btn-group" role="group">

                                                <button class="btn btn-primary btn-file">
                                                        <i class="fa fa-pencil"></i> Add Images
                                                        <input type="file" name="cover[]" multiple>
                                                      </button>

                                            <button onclick="
                                            var result=confirm('Are you sure you want to delete this Post?');
                                            if( result ){
                                                event.preventDefault();
                                                document.getElementById('del').submit();
                                            }
                                            " 
                                            class="btn btn-primary" type="button"><i class="fa fa-trash-o"></i> Delete </button>




                                            <button  class="btn btn-primary" type="Submit"><i class="fa fa-cloud-upload"></i> Update </button>
                                        </div>
                                    </div>
                                    
                                </form>
                            </div>
        {{-- delete function startts here for event --}}
        <form id="del" class="pull-right" method="POST" action="/events/{{$event->id}} " style="display:none">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            
            
          </form>
        {{-- delete function for event ends here --}}

                    {{-- delete form start here --}}
                    <form id="dele" class="pull-right" name="dele" method="POST" action="" style="display:none">
                        {{ csrf_field() }}
                    <input type="hidden" value="{{$event->id}}">
                        <input type="hidden" name="_method" value="DELETE">
                        
                        
                      </form>
                      {{-- delete form ends here --}}
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  
                </div>
            </div>
  </div>
</div>
  @endsection