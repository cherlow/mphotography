
@extends('layouts.dashboard')

@section('content')

<section class="content-header">
  <h1>
    Dashboard
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
  </ol>
</section>
<br>

<div class="" style="padding:15px;">
        <div class="box box-primary">
                <div class="box-body">
                  <div class="alert text-center" style="background:rgb(36,40,43); opacity:0.9; color:#b8c7ce">

                    <span>Holla admin, Here You Administrate</span>&nbsp;
                    <span><a class="btn btn-primary" href="/posts/create" style="text-decoration:none">Make A new Blog Post</a></span>

                  </div>
                </div>
                <div class="box-body">
                        <div class="row">
                          <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-aqua">
                              <span class="info-box-icon"><i class="fa fa-users"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text">Users</span>
                                <span class="info-box-number">
                                 {{count($users)}}
                                </span>

                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <!-- /.col -->
                          <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-aqua">
                              <span class="info-box-icon"><i class="fa fa-commenting"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text">Messages</span>
                                <span class="info-box-number">
                                  {{count($messages)}}
                                </span>

                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <!-- /.col -->
                          <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-aqua">
                              <span class="info-box-icon"><i class="fa fa-comments"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text">Reservations</span>
                                <span class="info-box-number">
                                  {{count($reservations)}}
                                </span>

                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <!-- /.col -->
                          <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="info-box bg-aqua">
                              <span class="info-box-icon"><i class="fa fa-pencil-square-o"></i></span>

                              <div class="info-box-content">
                                <span class="info-box-text">My Posts</span>
                              <span class="info-box-number">{{count($posts)}}</span>

                              </div>
                              <!-- /.info-box-content -->
                            </div>
                            <!-- /.info-box -->
                          </div>
                          <!-- /.col -->

                        </div>

                      </div>
                      <div>
        <div class="containe" style="padding:15px;">
            <div class="row">
                <div class="col-md-6">
                
                <div class="box box-primary">
                  <div class="box-header">Users</div>
                <div class="box-body" style="height:200px; overflow-y:auto; color:white; background:#222d32">
                <div class="table-responsive">
                    <table class="table no-margin">
                      <thead>
                      <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <tbody>
                        @foreach($users as $user)
                                 <tr>
                          <td>{{$user->name}}</td>
                          <td>{{$user->email}}</td>
                          <td><span class="label label-success">{{$user->created_at}}</span></td>
                                <td>
                                <a href="mailto:{{$user->email}}" class="btn btn-primary btn-sm"><span class="fa fa-send"></span> Mail</a>
                                </td>
                              </tr>
                              @endforeach
                                                                             
                      
                      </tbody>
                    </table>
                  </div>
</div>
</div>
                </div>
                <div class="col-md-6"> <div class="box box-primary" >
                  <div class="box-header">Messages</div>
                <div class="box-body" style="height:200px; overflow-y:auto; color:white; background:#222d32">
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
                            <span class="contacts-list-msg">{{substr($message->message,0,50)}}...</span>
                          </div>
                          <!-- /.contacts-list-info -->
                        </a>
                      </li>
                      @endforeach
                    
                    </ul>
</div>
</div></div>
            </div>
            <div class="row">
                <div class="col-md-6"> <div class="box box-primary">
                  <div class="box-header">Reservations</div>
                <div class="box-body" style="height:200px; overflow-y:auto; color:white; background:#222d32">
                <ul class="contacts-list">
            
            @foreach($reservations as $reservation)
                        
            <li>
              <a href="/showreservation/{{$reservation->id}}">
              <img class="contacts-list-img" src="/storage/app_images/avatar04.png" alt="User Image">

            
                <div class="contacts-list-info">
                      <span class="contacts-list-name">
                        {{$reservation->name}}
                        <small class="contacts-list-date pull-right">{{$reservation->created_at}}</small>
                      </span>
                  <span class="contacts-list-msg">{{substr($reservation->details,0,50)}}...</span>
                </div>
                <!-- /.contacts-list-info -->
              </a>
            </li>
            @endforeach
            
            
            
                        <!-- End Contact Item -->
            </ul>
</div>
</div></div>
                <div class="col-md-6"> <div class="box box-primary">
                  <div class="box-header">My Posts</div>
                <div class="box-body" style="height:200px; overflow-y:auto; color:white; background:#222d32">
                <ul class="contacts-list">
                  @foreach($posts as $post)
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
                      </li>
                      @endforeach
                    
                    </ul>
</div>
</div></div>
            </div>
        </div>
    </div>
        </div>
</div>

@endsection
