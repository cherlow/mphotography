@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Create Gallery
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Create Gallery</li>
    </ol>
  </section> 
<br>

<div class="margin">
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form method="post" action="/feeds" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="control-label">Tag </label>
                        <input class="form-control" type="text" name="tag" required >
                    </div>
                    <div class="form-group">
                        <label class="control-label">Category </label>
                        <select class="form-control" name="category" required>
                            <optgroup label="Select Images Category">
                                @if(count($categories)<1)
                                <p>no categories...navigate to categories and create</p>
                                @else
                                <?php $num=0 ?>
                                @foreach($categories as $category)
                                @if($num<1)
                            <option value="{{$category->name}}" selected>{{$category->name}}</option>
                                @else
                            <option value="{{$category->name}}">{{$category->name}}</option>
                                @endif
                                <?php $num++; ?>
                                @endforeach
                                @endif
                              
                            </optgroup>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Images (you can select multiple)</label>
                        <input type="file" name="cover[]" multiple required>
                    </div>
                    <button class="btn btn-primary" type="submit">Upload Images</button>
                </form>
            </div>
        </div>
</div>
    @endsection