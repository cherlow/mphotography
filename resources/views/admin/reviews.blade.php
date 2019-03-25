


  @extends('layouts.dashboard')
@section('content')
<section class="content-header">
    <h1>
     Reviews
    </h1>
    <ol class="breadcrumb">
      <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Reviews</li>
    </ol>
  </section>
  <br>
  <div class="margin">
    {{-- top bar start --}}
    <div class="alert alert-success text-center" role="alert"><span>Waddup Admin, Add Reviews</span>
      <button class="btn btn-primary" type="button" onclick="document.getElementById('name').focus()"><i class="fa fa-plus"></i> New Review</button>
  </div>
    {{-- top bar end --}}


    <div class="row">
        <div class="col-md-6">
            <h3>List of Reviews:</h3>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id </th>
                            <th>name </th>
                            <th>status </th>
                            <th>review</th>
                            <th>actions </th>
                        </tr>
                    </thead>
                    <tbody>
                       @if(count($reviews)<1)
                       <p>there no Reviews Yet</p>
                       @else
                       <?php $num=1;  ?>
                       @foreach($reviews as $review)
                        <tr>
                        <td>#{{$num}}</td>
                        <td>{{$review->name}}</td>
                        <td><span class="badge bg-green">{{$review->status}}</span></td>
                        <td>{!!$review->review!!}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    @if($review->status=='pending')
                                <a class="btn btn-primary" type="button" href="/reviewstatus/{{$review->id}}"> <i class="fa fa-check"></i> activate</a>
                                   
                                
                                    @else
                                <a class="btn btn-primary" type="button" href="/reviewstatus/{{$review->id}}"> <i class="fa fa-remove"></i> deactivate</a>
                                  
                               
                                    @endif
                                </div>

                      


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
            <h3>Create New Review:</h3>
            <form method="post" action="/reviews">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="control-label">Reviewer name</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label class="control-label">Review </label>
                    <textarea class="form-control" id="article-ckeditor" name="review"></textarea>
                </div><button class="btn btn-primary" role="button" type="submit">Submit</button>
                <br>
            </form>
            <br>
        </div>
    </div>

  </div>
  @endsection


