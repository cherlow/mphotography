@extends('layouts.pageslayout')
@section('top-content')
<div class="animate-box">
        <h1 class="holder"><span>Login</span></h1>
        <p>Quality Photoshoot sessions since</p>
        <p>27.03.2015 </p>
        <p><a data-toggle="modal" data-target="#modal-danger" class="btn btn-primary btn-custom">Book a Session</a></p>
    </div>

@endsection


@section('content')
<div id="app">
    <login></login>
</div>

@endsection
