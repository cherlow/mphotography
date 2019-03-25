@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Posts Create
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Posts Create</li>
    </ol>
  </section>
<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
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
