<!doctype html>

<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script  src="/js/jquery-3.2.1.min.js"></script>
		<script  src="/js/jquery-ui.min.js"></script>
		<script  src="/js/welcome.js"></script>

        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/containerskenya.css')}}" rel="stylesheet">
        <title>Containers Kenya</title>

       

    </head>
	
    <body>


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
               <form>
                  <div class="input-group spacer">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="email" placeholder="What do you want the container for?">
                  </div>


                  <div class="input-group spacer">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  
                  <div class="input-group spacer">
                    <span class="input-group-addon">Text</span>
                    <input id="msg" type="text" class="form-control" name="msg" placeholder="Additional Info">
                  </div>

                  <div class="input-group spacer">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input id="email" type="text" class="form-control" name="email" placeholder="What do you want the container for?">
                  </div>

                   <button type="submit" class="btn btn-default">Submit</button>
              </form> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




       <div id="container-fluid">
            <div class="container">
                <img class="logo-icon img-responsive" src="{{ URL::asset('/images/logo-icon.png')}}"/>
                <img class="logo-name img-responsive" src="{{ URL::asset('/images/logo-name.png')}}"/>

            </div>
       </div>

       <div class="slider">
            <div id = "myCarousel" class = "carousel slide">
       
               <!-- Carousel indicators -->
               <ol class = "carousel-indicators">
                  <li data-target = "#myCarousel" data-slide-to = "0" class = "active"></li>
                  <li data-target = "#myCarousel" data-slide-to = "1"></li>
                  <li data-target = "#myCarousel" data-slide-to = "2"></li>
                  <li data-target = "#myCarousel" data-slide-to = "3"></li>
               </ol>   
               
               <!-- Carousel items -->
               <div class = "carousel-inner">
                  
                  <div class = "item active">
                        <div class="container">
                          <div class="row">
                              <div class="col-md-6">
                                     <img class="slider-img img-responsive" src = "{{ URL::asset('/images/cafe.png')}}" alt = "First slide">
                              </div>

                              <div class="col-md-5">
                                <h1 class="white big-header"><b>Fabricated Cafe</b></h1>
                                <h3 class="white running-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h3>

                                <p class="white">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat</p>


                                <div class="empty">
                                     <button class="order_btn" type="button" id="sub_btn"><b>Order Now</b></button>
                                     <button class="catalogue_btn" type="button" id="sub_btn"><b>Just Send Me a Catalogue</b></button>
									 
                                <div id="empty">
                                     <button class="order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                                     <button class="catalogue_btn" type="button" id="sub_btn"><b>Just Send Me a Catalogue</b></button>

                                </div>

                             
                              </div>
                          </div>
                        </div>
                  </div>
                  
                  <div class = "item">
                    <div class="container">
                         <div class="row">
                              <div class="col-md-6">
                                     <img class="slider-img img-responsive" src = "{{ URL::asset('/images/house.png')}}" alt = "First slide">
                              </div>

                              <div class="col-md-6">
                                <h1 class="white big-header"><b>Container Homes</b></h1>
                                <h3 class="white running-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h3>

                                <p class="white">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat</p>


                                 <div class="empty">
                                     <button class="order_btn" type="button" id="sub_btn"><b>Order Now</b></button>
                                     <button class="catalogue_btn" type="button" id="sub_btn"><b>Just Send Me a Catalogue</b></button>
=======
                                 <div id="empty">
                                     <button class="order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                                     <button class="catalogue-btn" type="button" id="sub_btn"><b>Just Send Me a Catalogue</b></button>
                                </div>
                              </div>

                          </div>
                    </div>
                </div>
                  
                  <div class = "item">
                      <div class="container">
                         <div class="row">
                              <div class="col-md-6">
                                     <img class="slider-img img-responsive" src = "{{ URL::asset('/images/stall.png')}}" alt = "First slide">
                              </div>

                              <div class="col-md-6">
                                <h1 class="white big-header"><b>Stalls & Shops</b></h1>
                                <h3 class="white running-line">Lorem ipsum dolor sit amet, consectetur adipisicing elit,</h3>

                                    <p class="white">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat</p>


                                     <div class="empty">
                                         <button class="order_btn" type="button" id="sub_btn"><b>Order Now</b></button>
                                         <button class="catalogue_btn" type="button" id="sub_btn"><b>Just Send Me a Catalogue</b></button>

                                     <div id="empty">
                                         <button class="order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                                         <button class="catalogue_btn" type="button" id="sub_btn"><b>Just Send Me a Catalogue</b></button>

                                    </div>

                              </div>
                          </div>
                       </div>
                  </div>

               </div>
               
               <!-- Carousel nav -->
               <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">&lsaquo;</a>
               <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">&rsaquo;</a>
       
            </div> 
       </div>

        <script src="{{ URL::asset('/js/jquery.js')}}"></script>
        <script src="{{ URL::asset('/js/bootstrap.js')}}"></script>
        <script src="{{ URL::asset('/js/omega.js')}}"></script>

    </body>
   </html>
