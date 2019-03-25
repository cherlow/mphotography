@extends('layouts.pageslayout')
@section('top-content')
<div class="animate-box">
        <h1 class="holder"><span>Blog Details</span></h1>
        <p>Quality Photoshoot sessions since</p>
        <p>27.03.2018</p>
        <p><a href="gallery.html" class="btn btn-primary btn-custom">Book a Session</a></p>
    </div>
    
@endsection
@section('content')
{{-- blog content starts here --}}
<div id="app">
<blogview blogid="{{$id}}"></blogview>
</div>

{{-- blog content ends here --}}
@endsection