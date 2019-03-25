@if(count($errors) > 0)



<div class="alert alert-danger" >
All the fields are required

</div>

@endif


@if(session('success'))

<div class="alert alert-success text-center" role="alert">
{{session('success')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>

@endif

@if(session('error'))

<div class="alert alert-danger">
{{session('error')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>

@endif