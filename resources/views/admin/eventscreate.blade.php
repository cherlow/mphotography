@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Events Create
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Events Create</li>
    </ol>
  </section>
<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
    <div class="box box-warning">
        <div class="box-header">
          <h3 class="box-title text-center">Create a New Event Post</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          
                <div class="">
                        <form role="form" method="post" action="/events" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label class="control-label">Event Title</label>
                                <input name="title" class="form-control" type="text" placeholder="e.g Arboretum Photoshoot" >
                            </div>
                            <div class="form-group">
                                    <label class="control-label">Place Of Event</label>
                                    <input name="location" class="form-control" type="text" placeholder="Nairobi, Holy Ghost Cathedral" >
                                </div>
                            <div class="form-group">
                                <label class="control-label">Event Description</label>
                                <textarea name="body" id="article-ckeditor" class="form-control" rows="8" placeholder="Brief Description of the event" ></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Event Images(You Can select more than one)</label>
                                <input name="cover[]" type="file" required multiple>
                            </div>
                            
                            <div class="btn-toolbar">
                                <div class="btn-group" role="group">
                                    
                                    <button class="btn btn-default" type="Submit"><i class="fa fa-cloud-upload"></i> Post </button>
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
