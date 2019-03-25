@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Reservations
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Reservations</li>
    </ol>
  </section>
<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
            @if(count($reservations) > 0)

            <div class="box box-primary">
                        <div class="box-header with-border">
                          <h3 class="box-title">reservations</h3>
            
                          <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                          <div class="" style="background:#222d32; color:white">
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
                  <span class="contacts-list-msg">{{$reservation->details}}</span>
                </div>
                <!-- /.contacts-list-info -->
              </a>
            </li>
            
            
            
            @endforeach
            <!-- End Contact Item -->
            </ul>
            <!-- /.contatcts-list -->
            </div>
            
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
            {{-- {{$messages->links()}} --}}
            </div>
            </div>
            
            
            @else
            No Reservations yet
            @endif
    </div>
</div>
@endsection