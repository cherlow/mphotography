@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Events
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Events</li>
    </ol>
  </section>
  <br>
  <div class="margin">
    {{-- top bar start --}}
    <div class="alert alert-success text-center" role="alert"><span>Waddup Admin, Show Case your artistic work by posting your big Photoshoot Events.</span>
      <a class="btn btn-primary" style="text-decoration:none" href="/events/create" type="button"><i class="fa fa-plus"></i> New event Post</a>
  </div>
    {{-- top bar end --}}
    <div class="box box-warning">
        <div class="box-header text-center">
          <h3 class="box-title">My Photoshoot Events</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="row">

              @if(count($events) < 0)
              <p>There no events yet<p>
                @else
                @foreach($events as $event)
                <div class="col-md-6">
                <a href="/events/{{$event->id}}"> <h2>{{$event->title}}</h2></a>
                <p><i class="fa fa-clock-o"></i> {{$event->created_at}}</p>
                    <hr>
                    <div style="height:150px; overflow-y:auto">
                    <p>{!!$event->description!!}</p>
                    </div>
                    <div>
                    <div id="{{$event->id}}" class="carousel slide" data-ride="carousel">
                            
                            <div class="carousel-inner">
                              <?php $imagges=$images->where('event_id',$event->id) ;
                              $num=0; 
                              ?>
                              @foreach($imagges as $image)
                              @if($num < 1)
                              <div class="item active">
                              <img src="/storage/event_images/{{$image->name}}" alt="Third slide">
              
                                </div>
                              
                              @else
                              <div class="item">
                              <img src="/storage/event_images/{{$image->name}}" alt="Third slide">
              
                                </div>

                              @endif
                              <?php $num++; ?>
                              @endforeach
                              
                             
                         
                            </div>
                            <a class="left carousel-control" href="#{{$event->id}}" data-slide="prev">
                              <span class="fa fa-angle-left"></span>
                            </a>
                            <a class="right carousel-control" href="#{{$event->id}}" data-slide="next">
                              <span class="fa fa-angle-right"></span>
                            </a>
                          </div>
                    </div>
                    <br>
                    <div class="btn-toolbar">
                        <div class="btn-group" role="group">
                            <button class="btn btn-default" type="button"> <i class="fa fa-heart"></i> 764</button>
                            <button class="btn btn-default" type="button"><i class="fa fa-comments"></i> 89</button>
                        </div>
                        <div class="btn-group" role="group">
                            <a href="/events/{{$event->id}}/edit" class="btn btn-default" type="button"><i class="fa fa-edit"></i> Edit</a>
                            <button onclick="
                            var result=confirm('Are you sure you want to delete this Event?');
                            if( result ){
                                event.preventDefault();
                            document.getElementById('e{{$event->id}}').submit();
                            }
                            " 
                             class="btn btn-default" type="button"><i class="fa fa-trash-o"></i> Delete</button>
                        </div>
                    </div>
                </div>
                {{-- delete form start here --}}
              <form id="e{{$event->id}}" class="pull-right dele" method="POST" action="/events/{{$event->id}} " style="display:none">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="DELETE">
  
  
</form>
{{-- delete form ends here --}}
                
                @endforeach
                @endif


            </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix no-border">
          <a href="/events/create" type="button" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</a>
        </div>
      </div>

  </div>
  @endsection