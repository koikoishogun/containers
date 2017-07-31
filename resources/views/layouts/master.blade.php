
<!doctype html>

<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script  src="/js/jquery-3.2.1.min.js"></script>
        <script  src="/js/jquery-ui.min.js"></script>
        <script  src="/js/bootstrap.js"></script>
        <script  src="/js/welcome.js"></script>

        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/containerskenya.css')}}" rel="stylesheet">
        <title>Containers Kenya</title>

       

    </head>
  
    <body>
    
      <script src="/js/order/form.js"></script>
      <script  src="/js/cat/form.js"></script>
<!--Nav Bar-->
<div class="container-fluid">
            <nav class="navbar navbar-default">
              <div class="container menu-bar">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img class="logo-icon img-responsive" src="{{ URL::asset('/images/logo-02.png')}}"/></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <!--
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                      </ul>
                    </li>
                  </ul>
            -->
            <!--
                  <form class="navbar-form navbar-left">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                  </form>
            -->
                  <ul class="nav navbar-nav navbar-right">
                    <li class="blue"><a href="/"><b>Home</b></a></li>
                    <li class="blue"><a href="about-us"><b>About Us</b></a></li>
                    <li class="dropdown">
                      <a href="products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Our Products</b><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="products">Dry Containers</a></li>
                        <li><a href="products">Homes</a></li>
                        <li><a href="products">Offices</a></li>
                        <li><a href="products">Stalls</a></li>
                       <!-- <li role="separator" class="divider"></li> -->
                        <li><a href="products">Reefers</a></li>
                      </ul>
                    </li>
                    <li class="blue"><a href="blog"><b>Blog</b></a></li>
                    <button type="submit" class="btn btn-danger order-button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>


        <!--Modal Start Check-->

  <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title" id="exampleModalLabel">Customize Your Container</h1>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
          
                     <form class="order_form">
               {{csrf_field()}}

                        <div class="input-group spacer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <select class=" type form-control" name="type" placeholder="What do you want the container for?">
                            <option>-- What do you want the container for? --</option>
                            <option>Dry Containers</option>
                            <option>Reefers</option>
                            <option>Stalls</option>
                            <option>Cyber Cafes</option>
                            <option>Homes</option>
                            <option>Road Show Trucks</option>
                          </select>
                        </div>


                        <div class="input-group spacer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <select class="size form-control" name="size">
                            <option>-- Size --</option>
                            <option>2O Ft.</option>
                            <option>40 Ft.</option>
                          </select>
                        </div>
                        
                        <div class="input-group spacer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="text" class="form-control" name="name" placeholder="Your Name.">
                        </div>

                        <div class="input-group spacer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="text" class="form-control" name="phone_number" placeholder="Your Phone Number">
                        </div>

                         <div class="input-group spacer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>

                    
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class=" quote_btn btn btn-primary">Send Me a Quote</button>
            </div>
          </form>
          </div>
        </div>
      </div>
      <!-- second modal -->
      <div class="modal fade" id="my" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document" >
          <div class="modal-content">
          <form   class="cat_form" >
            <div class="modal-header">
               <h1 class="modal-title" id="exampleModalLabel1">We'll send you a catalogue</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
          </div>
          <div class="modal-body">
                
            {{csrf_field()}}
            <div class="form-group">
                 <input class="form-control" type="email"  placeholder="please enter email" name="email" >
            </div>
            
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                   <button type="submit" class=" quote_btn btn btn-primary">Send Catalogue</button>
          
          </div>
           </form>
          </div>
        </div>

      </div>

      <!--Modal End-->

      @yield('content')
      @include('layouts.footer')