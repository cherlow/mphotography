@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Users
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Users</li>
    </ol>
  </section>
  <br>
  <div class="col-lg-8 col-md-10 col-md-offset-1 col-lg-offset-2">
        <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Site Users</h3>
    
               
                </div>
                <!-- /.box-header -->
                <div class="box-body">
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
                          @if(count($users)<0)
                          @else
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
                          @endif
                     
                      
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix">
                 {{$users->links()}}
                </div>
                <!-- /.box-footer -->
              </div>
  </div>
  @endsection