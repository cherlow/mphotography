<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Musyoka Photography | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
    <!-- <link href="{{ asset('css/w3.css') }}" rel="stylesheet"> -->
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{ asset('css/fa/css/font-awesome.min.css') }}" rel="stylesheet">
  <!-- Ionicons -->
  <link href="{{ asset('css/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <!-- w3.css -->
  <!-- <link href="{{ asset('css/w3.css') }}" rel="stylesheet"> -->
  <!-- select2 -->
  <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
  <!-- Theme style -->
  <link href="{{ asset('css/AdminLTE.min.css') }}" rel="stylesheet">


  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->

    <link href="{{ asset('css/_all-skins.min.css') }}" rel="stylesheet">





  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
<style>
  .carousel-inner >.item >img{
    height: 304px;
    width: 100%

  } 
 .thumbnail >img{
  height: 304px;
    width: 100%
 }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="height: 100%;">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="/" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>P</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Musyoka</b>Photography</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu" id="app">
       
          <!-- Messages: style can be found in dropdown.less-->
          <notification user="{{auth()->user()->name}}" created="{{auth()->user()->created_at}}"></notification>
          <!-- Notifications: style can be found in dropdown.less -->
        
          <!-- Tasks: style can be found in dropdown.less -->
          
       
         
        
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('storage/app_images/avatar04.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>  {{ Auth::user()->name }}</p>
          <a href="/user/{{auth()->user()->id}}"><i class="fa fa-user "></i> admin</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="/">
            <i class="fa fa-home"></i> <span>Home</span>

          </a>
        </li>
        <li class="active">
          <a href="/home">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>

          </a>
        </li>

      
      
        <li>
                <a href="/posts">
                  <i class="fa fa-pencil-square-o"></i> <span>Posts</span>
                  <span class="pull-right-container">
                    
                  </span>
                </a>
              </li>
      
      
                 <li>
                <a href="/feeds">
                  <i class="fa fa-picture-o"></i> <span>Images</span>
                  <span class="pull-right-container">
                   
                  </span>
                </a>
              </li>
      

<li>

        <a href="/users">
          <i class="fa fa-users"></i> <span>Users</span>
          <span class="pull-right-container">
            
          </span>
        </a>
      </li>

        <li >
          <a href="/categories">
            <i class="fa fa-tasks"></i>
            <span>Categories</span>
            <span class="pull-right-container">
             
            </span>
          </a>
        </li>


        <li>
          <a href="/messages">
            <i class="fa fa-envelope"></i>
            <span>messages</span>
            <span class="pull-right-container">
          
            </span>
          </a>
        </li>


        <li class="">
          <a href="/listreservation">
            <i class="fa fa-money"></i> <span>Reservations</span>
            <span class="pull-right-container">
                   
            </span>
          </a>
        </li>

            

        <li>
          <a href="/reviews">
            <i class="fa fa-commenting"></i> <span>Reviews</span>
            <span class="pull-right-container">
              
            </span>
          </a>
        </li>


 
         <hr>
@if(Auth::user()->role !='hire' )
        <li>
          <a href="/posts/create" class="btn btn-success">
            <i class="fa fa-plus"></i> <span>Create a new Post</span>
          </a>
        </li>
  @endif

  @if(Auth::user()->role =='hire' )
  <li>
    <a href="/tasks/create" class="btn btn-success">
      <i class="fa fa-plus"></i> <span>Post a new Order</span>
    </a>
  </li>

  @endif
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">






<!-- content loaded here -->
@include('pages.flashmessage')
  @yield('content')












  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>smarticker</b> studios
    </div>
    <strong>Copyright &copy; 2018 <a href="#">TeamDevelopers</a>.</strong> All rights
    reserved.
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>
<script src="{{ asset('js/select2.full.min.js') }}"></script>


<script>
  $('.select2').select2()

  $(document).ready(function(){
ClassicEditor
    .create(document.querySelector("#article-ckeditor"))
    .catch(error=>{
        console.error(error);
    });
});
// CKEDITOR.replace('article-ckeditor');

</script>
</body>
</html>
