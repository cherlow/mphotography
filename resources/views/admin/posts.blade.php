@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     My Posts
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Posts</li>
    </ol>
  </section>
<br>

    <div class="margin">
        <div class="alert alert-success text-center" role="alert"><span>Waddup Admin, Make Your blog active by adding new blog posts.....Got something in mind? Lets create it.</span>
            <a class="btn btn-primary" style="text-decoration:none" href="/posts/create" type="button"><i class="fa fa-plus"></i> New Blog Post</a>
        </div>
        <div class="row">
            <div class="col-md-6 padding">
                    <div class="box box-warning">
                            <div class="box-header with-border">
                              <h3 class="box-title">Recent posts</h3>
            
                              <div class="box-tools pull-right">
                             
                               
                              </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body no-padding">
                                @if(count($posts) > 0)
                                @foreach($posts as $post)
                                <div class="row margin">
                                <div class="col-md-4 col-sm-4 "><img class="img-responsive" src='{{asset('storage/app_images/'.$post->cover_pic)}}'>
                                        <p>Posted {{$post->created_at}}</p>
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                        <a href="/posts/{{$post->id}}"><h3>{{$post->name}}</h3></a>
                                            <div style="max-height:200px; overflow:hidden">
                                            <p>{!!substr($post->body,0,200)!!}... </p></div>
                                            <div>
                                                <div class="btn-toolbar">
                                                    <div class="btn-group" role="group">
                                                        
                                                    <a class="btn btn-primary" role="button" href="/posts/{{$post->id}}/edit"> <span><i class="fa fa-edit"></i> edit</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <hr>
                                 @endforeach
                                @else
                                <p>There no Posts yets</p>
                                @endif
                                    
                                        

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer text-center">
                                    {{$posts->links()}}
                            </div>
                            <!-- /.box-footer -->
                          </div>
               
            
            </div>
            <div class="col-md-6">
                    <div class="box box-warning">
                            <div class="box-header">
                              <h3 class="box-title">Draft Posts</h3>
                
                              <div class="box-tools pull-right">
                                
                              </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body" style="color:white; background:#222d32">
                              <!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
                              <ul class="contacts-list">
                              @if(count($drafts) > 0)
                  @foreach($drafts as $post)
                      <li>
                        <a href="/posts">
                          <img class="contacts-list-img" style="border-radius:5%" src="/storage/app_images/{{$post->cover_pic}}" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  {{$post->name}}
                                  <small class="contacts-list-date pull-right">{{$post->created_at}}</small>
                                </span>
                            <span class="contacts-list-msg">{!!substr($post->body,0,100) !!}...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                        <p>
                             <a href="/posts/{{$post->id}}/edit"><button class="btn btn-primary" ><i class="fa fa-edit text-white"></i> edit</button></a>
                             <button class="btn btn-primary" onclick="
                                            var result=confirm('are you sure you want to delete this draft?')
                                            if(!result){
                                                event.preventDefault();
                                            }
                                            else{
                                              document.getElementById('<?php echo $post->id ?>').submit();
                                            }
                                            " > <i class="fa fa-trash-o text-white"></i> delete</button>
                                             <a href="/publish/{{$post->id}}" role="button" class="btn btn-primary"><i class="fa fa-send"></i> Publish</a>
                             <form class="pull-right hidden" method="POST" action="/posts/{{$post->id}}" id="{{$post->id}}">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn" onclick="
                                            var result=confirm('are you sure you want to delete this draft?')
                                            if(!result){
                                                event.preventDefault();
                                            }
                                            "
                                            
                                            >
                                                <i class="fa fa-trash-o text-primary"></i>
                                            </button>
                                          </form>
                                         
                            </p>
                      </li>
                      @endforeach

                                  @else
                                  <p>There no drafts yet</p>
                                  @endif

                    </ul>
                            </div>

                            <!-- /.box-body -->
                            <div class="box-footer clearfix no-border">
                              <a type="button" href="/posts/create" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> Add item</a>
                            </div>
                          </div>
                
            
            </div>
            <div class="col-md-6">
                
                    <div class="box box-warning">
                            <div class="box-header">
                              <h3 class="box-title text-center">Create a New Blog Post</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                              
                                    <div class="">
                                            <form role="form" method="post" action="/posts" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="1" id="tog" name="toggler"/>
                                                <div class="form-group">
                                                    <label class="control-label">Post Title</label>
                                                    <input name="title" class="form-control" type="text" placeholder="e.g Best Photoshoot techniques" required>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Post Body</label>
                                                    <textarea name="body" id="article-ckeditor" class="form-control" rows="8" placeholder="content" ></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label">Cover Image</label>
                                                    <input name="cover" type="file" required>
                                                </div>
                                                
                                                <div class="btn-toolbar">
                                                    <div class="btn-group" role="group">
                                                        <button onclick="document.getElementById('tog').value= 0" class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Save </button>
                                                        <button onclick="document.getElementById('tog').value= 1" class="btn btn-primary" type="Submit"><i class="fa fa-cloud-upload"></i> Post </button>
                                                    </div>
                                                </div>
                                                
                                            </form>
                                        </div>

                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer clearfix no-border">
                              
                            </div>
                          </div>
        </div>
    
</div>
@endsection