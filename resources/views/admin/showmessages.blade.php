@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     MailBox
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Mailbox</li>
    </ol>
  </section>
  <br>
  <div class="row">
 <div class="col-md-8 col-md-offset-2">
    <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Inbox</h3>

       
          <!-- /.box-tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <div class="mailbox-controls">
            <!-- Check all button -->
           
            <!-- /.btn-group -->
           
            <div class="pull-right">
              {{count($messages)}} message(s)
              
              <!-- /.btn-group -->
            </div>
            <br>
            <!-- /.pull-right -->
          </div>
          <div class="box-body" style="height:400px; overflow-y:auto; color:white; background:#222d32">
                <ul class="contacts-list">
                  @foreach($messages as $message)
                      <li>
                        <a href="/readmessage/{{$message->id}}">
                          <img class="contacts-list-img" src="/storage/app_images/avatar04.png" alt="User Image">

                          <div class="contacts-list-info">
                                <span class="contacts-list-name">
                                  {{$message->name}}
                                  <small class="contacts-list-date pull-right">{{$message->created_at}}</small>
                                </span>
                            <span class="contacts-list-msg">{{substr($message->message,0,100)}}...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      @endforeach
                    
                    </ul>
</div>
          <!-- /.mail-box-messages -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer no-padding">
          <div class="mailbox-controls">
          
            
          </div>
        </div>
      </div>
 </div>
  </div>

  @endsection