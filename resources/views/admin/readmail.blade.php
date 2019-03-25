@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     ReadMail
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">ReadMail</li>
    </ol>
  </section>
  <br>
  <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
            <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Read Mail</h3>
        
                      
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                      <div class="mailbox-read-info">
                      <h3>{{$message->subject}}</h3>
                        <h5>From: {{$message->email}}
                        <span class="mailbox-read-time pull-right">{{$message->created_at}}</span></h5>
                      </div>
                      <!-- /.mailbox-read-info -->
                  
                      <!-- /.mailbox-controls -->
                      <div class="mailbox-read-message">
                        
                      <p>{{$message->message}}</p>
                       
                     
                      </div>
                      <!-- /.mailbox-read-message -->
                    </div>
                    <!-- /.box-body -->
                   
                    <!-- /.box-footer -->
                    <div class="box-footer">
                      <div class="pull-right">
                        <a href="mailto:{{$message->email}}" type="button" class="btn btn-primary"><i class="fa fa-reply"></i> Reply</a>
                        
                      </div>
                      
                      
                    </div>
                    <!-- /.box-footer -->
                  </div>
      </div>
  </div>
  @endsection