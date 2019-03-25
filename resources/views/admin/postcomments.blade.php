@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Blog Comments
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Comments</li>
    </ol>
  </section>
  <br>
  <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
            <div class="box box-warning direct-chat direct-chat-warning" style="height:100%">
                    <div class="box-header with-border">
                    <h3 class="box-title">{{$post->name}}</h3>
    
                      <div class="box-tools pull-right">
                        
                      </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <!-- Conversations are loaded here -->
                      <div class="direct-chat-messages" style="height:100%">
                          @if(count($comments)>0)
                        <!-- Message. Default to the left -->
                        @foreach ($comments as $comment)
                            
                     
                        <div class="direct-chat-msg">
                          <div class="direct-chat-info clearfix">
                          <span class="direct-chat-name pull-left">{{$comment->commentor_body}}</span>
                          <span class="direct-chat-timestamp pull-right">{{$comment->created_at}}</span>
                          </div>
                          <!-- /.direct-chat-info -->
                          <img class="direct-chat-img" src="/storage/app_images/avatar04.png" alt="message user image">
                          <!-- /.direct-chat-img -->
                          <div class="direct-chat-text">
                           {{$comment->comment}}
                           <br>
                           <div>
                           <a onclick="
                           var result=confirm('are you sure you want to delete this comment');
                           if(!result){
                               event.preventDefault();
                           }
                           " 
                           
                           href="/commentdelete/{{$comment->id}}" class="btn btn-sm btn-primary">Delete</a>
                           </div>
                          </div>
                          <!-- /.direct-chat-text -->
                        </div>
                        @endforeach
                        @else
                        <p>There are no comments yet</p>
                        @endif
    
                      </div>
                      <!--/.direct-chat-messages-->
    
                      
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                     
                    </div>
                    <!-- /.box-footer-->
                  </div>
      </div>
  </div>
  @endsection