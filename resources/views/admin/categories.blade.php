@extends('layouts.dashboard')

@section('content')
<section class="content-header">
    <h1>
     Categories
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Categories</li>
    </ol>
  </section>
  <br>
  <div class="margin">
    {{-- top bar start --}}
    <div class="alert alert-success text-center" role="alert"><span>Waddup Admin, Add Photo Categories</span>
      <button class="btn btn-primary" type="button" onclick="document.getElementById('name').focus()"><i class="fa fa-plus"></i> New Category</button>
  </div>
    {{-- top bar end --}}


    <div class="row">
        <div class="col-md-6">
            <h3>List of Categories:</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id </th>
                            <th>name </th>
                            <th>status </th>
                            <th>actions </th>
                        </tr>
                    </thead>
                    <tbody>
                       @if(count($categories)<1)
                       <p>there no Categories Yet</p>
                       @else
                       <?php $num=1;  ?>
                       @foreach($categories as $category)
                        <tr>
                        <td>#{{$num}}</td>
                        <td>{{$category->name}}</td>
                        <td><span class="badge bg-green">{{$category->status}}</span></td>
                            <td>
                                <div class="btn-group" role="group">
                                    @if($category->status=='pending')
                                <a class="btn btn-primary" type="button" href="/categorystatus/{{$category->id}}"> <i class="fa fa-check"></i> activate</a>
                                    <button class="btn btn-primary" type="button"><i class="fa fa-trash-o"></i> Drop</button>
                                <a class="btn btn-primary" type="button" href="/categories/{{$category->id}}/edit"><i class="fa fa-edit"></i> Edit</a>
                                    @else
                                <a class="btn btn-primary" type="button" href="/categorystatus/{{$category->id}}"> <i class="fa fa-remove"></i> deactivate</a>
                                    <button class="btn btn-primary"
                                    onclick=
                                    "
                                    var result=confirm('Are you sure you want to delete this Category and all associate images?');
                                            if( result ){
                                                event.preventDefault();
                                            document.getElementById('c{{$category->id}}').submit();
                                            }
                                    "
                                    type="button"><i class="fa fa-trash-o"></i> Drop</button>
                                <a class="btn btn-primary" type="button" href="/categories/{{$category->id}}/edit"><i class="fa fa-edit"></i> Edit</a>
                                    @endif
                                </div>

                                 {{-- delete function startts here for event --}}
                            <form id="c{{$category->id}}" class="pull-right" method="POST" action="/categories/{{$category->id}} " style="display:none">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                    
                                    
                                </form>
                                 {{-- delete function for event ends here --}}


                            </td>
                        </tr>
                        <?php $num++; ?>
                        @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <h3>Create New Category:</h3>
            <form method="post" action="/categories">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label">Category name</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label class="control-label">Description </label>
                    <textarea class="form-control" id="article-ckeditor" name="desc"></textarea>
                </div><button class="btn btn-primary" role="button" type="submit">Submit</button>
                <br>
            </form>
            <br>
        </div>
    </div>

  </div>
  @endsection