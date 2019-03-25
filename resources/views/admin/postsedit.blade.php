@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Posts Edit
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Posts Edit</li>
    </ol>
  </section>
  <br>
  <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title text-center">Edit This Blog Post</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  
                        <div class="">
                        <form role="form" method="post" action="/posts/{{$post->id}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="PUT"/>
                                    <div class="form-group">
                                            <label class="control-label">Cover Image</label>
                                    <img class="img-responsive" src="/storage/app_images/{{$post->cover_pic}}" style="height:200px"><br>
                                             
                                                    <div class="btn btn-primary btn-file">
                                                      <i class="fa fa-pencil"></i> Change Image
                                                      <input type="file" name="cover">
                                                    </div>
                                                  
                                    
                                        </div>
                                    <div class="form-group">
                                            <label class="control-label" for="user_id">Post Id</label>
                                    <input class="form-control" type="text" readonly="" name="user_id" value="#0{{$post->id}}">
                                        </div>
                                    <div class="form-group">
                                        <label class="control-label">Post Title</label>
                                    <input name="title" class="form-control" value="{{$post->name}}" type="text" placeholder="e.g Best Photoshoot techniques" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Post Body</label>
                                    <textarea name="body" id="article-ckeditor" class="form-control" rows="8" placeholder="content" >{{$post->body}}</textarea>
                                    </div>
                                  
                                    
                                    <div class="btn-toolbar">
                                        <div class="btn-group" role="group">
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
        {{-- delete function startts here --}}
        <form id="del" class="pull-right" method="POST" action="/posts/{{$post->id}} " style="display:none">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            
            
          </form>
        {{-- delete function ends here --}}
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                  
                </div>
            </div>
        </div>
  </div>

  @endsection