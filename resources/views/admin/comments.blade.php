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
          {{-- comments start here --}}
          @if(count($posts) > 0)

<div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Posts</h3>

              <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search post">
                  <span class="fa fa-search form-control-feedback"></span>
                </div>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="" style="background:#222d32; color:white">
                                  <ul class="contacts-list">


@foreach($posts as $post)
<?php $thiscomments=$comments->where('commentable_id',$post->id) ?>

<li>
  <a href="/postcomments/{{$post->id}}">
  <img class="contacts-list-img" src="/storage/app_images/{{$post->cover_pic}}" alt="User Image">

    <div class="contacts-list-info">
          <span class="contacts-list-name">
            {{$post->name}}
            <small class="contacts-list-date pull-right">{{$post->created_at}}</small>
          </span>
        <span class="contacts-list-msg">{{count($thiscomments)}} comments</span>
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
{{$posts->links()}}
</div>
</div>


@else
No Posts yet
@endif
          {{-- comments end here --}}
      </div>
  </div>
  @endsection