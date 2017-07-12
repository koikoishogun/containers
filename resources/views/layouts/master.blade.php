<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Omega Opticians</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/omega-style.css')}}" rel="stylesheet">

        <meta name = "viewport" content="width=device-width, initial-scale=1">
         <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
    </head>
    <body>
            <div class="head-contact container-fluid">
                <div class="container">
                    <p class="text-right white"><b>+254 (20) 2215957 | +254 726 129331 | +254 736 13348&nbsp&nbsp&nbspinfo@omegaoticians.com</b></p>
                </div>
            </div>

            <div class="head-menu container-fluid">
                <div class="container">
                    <div class="col-md-3">
                        <img class="logo img-responsive" src="{{ URL::asset('/images/png/logo.png')}}"/>
                    </div>


                    <div class="col-md-7 pull-right menu-links">
                         <nav class="navbar">
                              <div class="container-fluid">
                                <div class="navbar-header">
                                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                  </button>
                                </div>
                                <div class="collapse navbar-collapse" id="myNavbar">
                                  <ul class="nav navbar-nav">
                                    <li class="active"><a href="/omega/omega/public">Home</a></li>
                                    <li><a href="aboutus">About Us</a></li>
                                    <li><a href="services">Services</a></li>
                                    <li><a href="products">Products</a></li>
                                    <li><a href="blog">Blog</a></li>
                                    <a href="storelocator" class="btn btn-danger"><span class="glyphicon glyphicon-home"></span> STORE LOCATOR</a>
                                  </ul>
                                </div>
                              </div>
                        </nav>
                    </div>
                </div>
            </div>
      @yield('content')
       @include('layouts.footer')

       <script src="{{ URL::asset('/js/jquery.js')}}"></script>
        <script src="{{ URL::asset('/js/bootstrap.js')}}"></script>
        <script src="{{ URL::asset('/js/omega.js')}}"></script>
        <script src="{{ URL::asset('/js/omegamaps.js')}}"></script>

        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCguLTNa4uu5gPNvB5mIXPO3UsSJrwfKww "></script>
        </body>
      </html>