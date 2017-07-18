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
									 
                                <div  class="empty">
                                     <button class="order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                                     <button class="catalogue_btn" type="button" id="sub_btn" data-toggle="modal" data-target="#my"><b>Just Send Me a Catalogue</b></button>
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

                                 <div  class="empty">
                                     <button class="order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                                     <button class="catalogue_btn" type="button" id="sub_btn" data-toggle="modal" data-target="#my"><b>Just Send Me a Catalogue</b></button>
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

                                     <div  class="empty">
                                     <button class="order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                                     <button class="catalogue_btn" type="button" id="sub_btn" data-toggle="modal" data-target="#my"><b>Just Send Me a Catalogue</b></button>
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
          </div>

          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/reefers.jpg')}}" alt = "First slide">
          </div>

          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/stalls.jpg')}}" alt = "First slide">
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/cyber.jpg')}}" alt = "First slide">
          </div>

          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/homes.jpg')}}" alt = "First slide">
          </div>

          <div class="col-md-4">
            <img class="slider-img img-responsive" src = "{{ URL::asset('/images/roadshow.jpg')}}" alt = "First slide">
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
