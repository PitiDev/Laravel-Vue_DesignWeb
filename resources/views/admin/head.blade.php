<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<title>Piti Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="DigitalSkill" />
<meta name="description" content="DigitalSkill" />
<meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DigitalSkill') }}</title>
<link rel="stylesheet" href="{{ asset('css/w3.css')}}">
{{-- <link rel="stylesheet" href="{{ asset('lao/style.css')}}"> --}}
<link rel="stylesheet" href="{{ asset('css/main.css')}}">
<link rel="stylesheet" href="{{ asset('css/main.css')}}">
<link rel="stylesheet" href="{{ asset('css/phetsarath.css')}}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.main.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>



  <span class="w3-bar-item w3-right">
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <b style="color: #ffffff">ອອກຈາກລະບົບ</b>
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
      </form>
   </span>
  <span class="w3-bar-item w3-right" style="float: left;"><b>ຜູ່ໃຊ້:</b> {{ Auth::user()->name }}</span>
</div>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:260px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
    </div>
    <div class="w3-col s8 w3-bar">
      <h5><b>ສະບາຍດີ</b> <strong>{{ Auth::user()->name }}</strong></h5><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5><b>ໜ້າຄວບຄຸມ</b></h5>
  </div>
	<div class="w3-bar-block">
	<a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
	<a href="{{url('admin')}}" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  <b>Dashboard</b></a>
	<a href="{{url('admin/post')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-pencil-square" aria-hidden="true"></i>  <b>Post Courses</b></a>
  <a href="{{url('admin/list_post')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-alt" aria-hidden="true"></i>  <b>List Post</b></a>
  <a href="{{url('admin/event')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-lightbulb-o" aria-hidden="true"></i>  <b>Event Post</b></a>
   <a href="{{url('admin/list_event')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-list-alt" aria-hidden="true"></i>  <b>List Event</b></a>
	<a href="{{url('admin/contact')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-envelope-open" aria-hidden="true"></i>  <b>Contact</b></a>
	<a href="{{url('admin/service')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-slideshare" aria-hidden="true"></i>  <b>Service</b></a>
  <a href="{{url('admin/user')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-o" aria-hidden="true"></i>  <b>User</b></a>
  <a href="{{url('admin/useradmin')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle" aria-hidden="true"></i>  <b>User Admin</b></a>
	<a href="{{url('admin/setting')}}" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  <b>Setting</b></a><br><br>
	</div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> ໜ້າຄວບຄຸມ</b></h5>
  </header>

  
  @yield('content')
  @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif