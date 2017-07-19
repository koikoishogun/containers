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
<script src="/js/order/form.js"></script>
<script  src="/js/cat/form.js"></script>

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
			   <h1 class="modal-title" id="exampleModalLabel1">Customize Your Container</h1>
			    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
		</div>
		<div class="modal-body">
				  
			{{csrf_field()}}
			<div class="input-group spacer">
			   <input type="email"  placeholder="please enter email" name="email" >
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




       <div id="container-fluid">

<!--Navigation Bar-->

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
        <li class="blue"><a href="#"><b>Home</b></a></li>
        <li class="blue"><a href="#"><b>About Us</b></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Our Products</b><span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Dry Containers</a></li>
            <li><a href="#">Homes</a></li>
            <li><a href="#">Offices</a></li>
            <li><a href="#">Stalls</a></li>
           <!-- <li role="separator" class="divider"></li> -->
            <li><a href="#">Reefers</a></li>
          </ul>
        </li>
        <button type="submit" class="btn btn-danger order-button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<!--nav end-->
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
                              <div class="col-md-5 col-md-offset-1">
                                     <img class="slider-img img-responsive" src = "{{ URL::asset('/images/carousel1.jpg')}}" alt = "First slide">
                              </div>

                              <div class="col-md-5">
                                <h1 class="big-header blue"><b>Business Stalls</b></h1>
                                <h3 class="running-line red"><b>Financially friendly. Easy and Fast to Install</b></h3>

                                <p class="body-text">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat</p>
									 
                                <div  class="empty">
                                     <button class="btn btn-primary order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                                     <button class="btn btn-danger catalogue_btn" type="button" id="sub_btn" data-toggle="modal" data-target="#my"><b>Just Send Me a Catalogue</b></button>
                                </div>

                              </div>

                          </div>
                        </div>
                  </div>
                  
                  <div class = "item">
                    <div class="container">
                         <div class="row">
                              <div class="col-md-5 col-md-offset-1">
                                     <img class="slider-img img-responsive" src = "{{ URL::asset('/images/carousel2.jpg')}}" alt = "First slide">
                              </div>

                              <div class="col-md-5">
                                <h1 class="big-header blue"><b>Container Homes</b></h1>
                                <h3 class="running-line red"><b> Durable, Convenient, yet Financially Friendly</b></h3>

                                <p class="body-text">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat</p>
                   
                                <div  class="empty">
                                     <button class="btn btn-primary order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                                     <button class="btn btn-danger catalogue_btn" type="button" id="sub_btn" data-toggle="modal" data-target="#my"><b>Just Send Me a Catalogue</b></button>
                                </div>

                              </div>

                          </div>
                    </div>
                </div>
                  
                  <div class = "item">
                      <div class="container">
                         <div class="row">
                              <div class="col-md-5 col-md-offset-1">
                                     <img class="slider-img img-responsive" src = "{{ URL::asset('/images/carousel3.jpg')}}" alt = "First slide">
                              </div>

                              <div class="col-md-5">
                                <h1 class="big-header blue"><b>Business Offices</b></h1>
                                <h3 class="running-line red"><b>convenient for temporary requirements and the results are more appealing</b></h3>

                                <p class="body-text">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris erit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidat</p>
                   
                                <div  class="empty">
                                     <button class="btn btn-primary order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                                     <button class="btn btn-danger catalogue_btn" type="button" id="sub_btn" data-toggle="modal" data-target="#my"><b>Just Send Me a Catalogue</b></button>
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

       <div class="container products">
        <div class="row">
          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/dry-containers.jpg')}}" alt = "First slide">
            <p><b>20ft at Ksh. 180,000/-</b></p>
            <p><b>40ft at Ksh. 280,000/-</b></p>
          </div>

          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/reefers.jpg')}}" alt = "First slide">
            <p><b>20ft at Ksh. 180,000/-</b></p>
            <p><b>40ft at Ksh. 280,000/-</b></p>
          </div>

          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/stalls.jpg')}}" alt = "First slide">
            <p><b>20ft at Ksh. 180,000/-</b></p>
            <p><b>40ft at Ksh. 280,000/-</b></p>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/cyber.jpg')}}" alt = "First slide">
            <p><b>20ft at Ksh. 180,000/-</b></p>
            <p><b>40ft at Ksh. 280,000/-</b></p>
          </div>

          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/homes.jpg')}}" alt = "First slide">
            <p><b>20ft at Ksh. 180,000/-</b></p>
            <p><b>40ft at Ksh. 280,000/-</b></p>
          </div>

          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/roadshow.jpg')}}" alt = "First slide">
            <p><b>20ft at Ksh. 180,000/-</b></p>
            <p><b>40ft at Ksh. 280,000/-</b></p>
          </div>

        </div>
       </div>

<!--Testimonials-->
  
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
                              <div class="col-md-2 col-md-offset-2">
                                     <img class="slider-img img-responsive" src = "{{ URL::asset('/images/avatar-02.png')}}" alt = "First slide">
                              </div>

                              <div class="col-md-6">
                                <h3 class="white testimonial-header"><b>I needed a clothes stall</b></h1>
                              
                                <p class="white">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>

                              </div>

                          </div>
                        </div>
                  </div>
                  
                  <div class = "item">
                    <div class="container">
                         <div class="row">
                               
                              <div class="col-md-2 col-md-offset-2">
                                     <img class="slider-img img-responsive" src = "{{ URL::asset('/images/avatar-02.png')}}" alt = "First slide">
                              </div>

                              <div class="col-md-6">
                                <h3 class="white testimonial-header"><b>I needed a clothes stall</b></h1>
                              
                                <p class="white">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                
                              </div>

                          </div>
                    </div>
                </div>
                  
                  <div class = "item">
                      <div class="container">
                         <div class="row">

                         <div class="col-md-2 col-md-offset-2">
                                     <img class="slider-img img-responsive" src = "{{ URL::asset('/images/avatar-02.png')}}" alt = "First slide">
                              </div>

                              <div class="col-md-6">
                                <h3 class="white testimonial-header"><b>I needed a clothes stall</b></h1>
                              
                                <p class="white">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
                                
                        </div>

                          </div>
                       </div>
                  </div>

               </div>
               
               <!-- Carousel nav -->
               <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev">&lsaquo;</a>
               <a class = "carousel-control right" href = "#myCarousel" data-slide = "next">&rsaquo;</a>
       
            </div>

            <div class="container">
              <h2 class="aboutus-header blue"><b>A Little About Us</b></h2>
              <p>Containers World Kenya was started back in 2007 as a dry shipping
Container company by private investors who had invested time trying to
understand the business after realizing a missing gap in the market.Due
to increasing clients demands and need to satisfy them , containers Kenya
was able to grow into not just a dry container dealing company but one
that can fabricate the containers into consumer customized products. Over
years of dedication , professionalism and experience we have been able to
grow to the best recognized container selling (dry and refrigerated) and
fabrication company. Customer satisfaction is 0ur core purpose and we have
professional engineers to ensure that our customers are satisfied and keep
asking for more.Basically , container fabrication is a highly emerging solution
and alternative to most construction works . Its financially friendly , easy
and fast to install, durable, convenient for temporary requirements and the
results are more appealing.We do fabrication into homes (container homes),
business stalls, offices , mobile clinics , mobile food units ,storage units ,tank
tainers (mobile filling stations),road show trucks , and any other customized
product. Necessary padding , wiring partitioning, submitter installations ,
spray painting is done to the best of our knowledge to ensure best quality
deliverance . Our expertise and experience has grown to solving all our client
needs</p>
            </div>
       </div>

<!--End Testimonial-->
        <script src="{{ URL::asset('/js/bootstrap.js')}}"></script>
        <script src="{{ URL::asset('/js/omega.js')}}"></script>

    </body>
   </html>
