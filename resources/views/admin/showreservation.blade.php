@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Show Reservation
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Reservations</li>
    </ol>
  </section>
<br>
<div class="margin">
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Reservation Details</h3>
    
                  <div class="box-tools">
                    
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>ID</th>
                      <th>name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Details</th>
                      <th>Action</th>
                    </tr>
                    
                    <tr>
                    <td>{{$reservation->id}}</td>
                    <td>{{$reservation->name}}</td>
                    <td>{{$reservation->email}}</td>
                    <td>{{$reservation->phone}}</td>
                    <td>{{$reservation->details}}</td>
                    <td><a href="mailto:{{$reservation->email}}" class="btn btn-primary"><span class="fa fa-send"></span> Mail</a></td>
                    </tr>
                    
                  </tbody></table>
                </div>
                <!-- /.box-body -->
              </div>
</div>
@endsection