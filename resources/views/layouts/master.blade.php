
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
		<script  src="/js/wlc.js"></script>
		<meta name="google-site-verification" content="n9swYqcSP0lnLuQubAo4b3psuDZ2J19iaaGJndIcBpM" />

        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/containerskenya.css')}}" rel="stylesheet">
        <title>Containers Kenya</title>

       

			<!-- Global Site Tag (gtag.js) - Google Analytics -->
			<script async src="https://www.googletagmanager.com/gtag/js?id=UA-107410195-2"></script>
			<script>
			  window.dataLayer = window.dataLayer || [];
			  function gtag(){dataLayer.push(arguments)};
			  gtag('js', new Date());

			  gtag('config', 'UA-107410195-2');
			</script>


    </head>
  
    <body>
    
     
	  
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
                    <li class="blue"><a href="#" class="home"><b>Home</b></a></li>
                    <li class="blue"><a href="#"   class="about_us" ><b>About Us</b></a></li>
                    <li class="dropdown">
                      <a href="products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Our Products</b><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"  class="products">Dry Containers</a></li>
                        <li><a href="#"  class="products">Homes</a></li>
                        <li><a href="#" class="products">Offices</a></li>
                        <li><a href="#" class="products">Stalls</a></li>
                       <!-- <li role="separator" class="divider"></li> -->
                        <li><a href="#" class="products">Reefers</a></li>
                      </ul>
                    </li>
                    <li class="blue"><a href="#" class="blog_li"><b>Blog</b></a></li>
                    <button type="button" class="btn btn-danger order-button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>
		<!-- THIS IS WHERE ONE PAGE aPP OCCURS        -->
		<div  class="container-fluid  ajax_div">
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
                                <div class="row slider-container">
                                    <div class="col-md-5 col-md-offset-1">
                                           <img class="slider-img img-responsive" src = "{{ URL::asset('/images/business-stalls-01.png')}}" alt = "First slide">
                                    </div>

                                    <div class="col-md-5">
                                      <h1 class="big-header blue"><b>Business Stalls</b></h1>
                                      <h3 class="running-line red"><b>Financially friendly. Easy and Fast to Install</b></h3>

                                      <p class="body-text">Create a distinctive customer experience in a shipping container shop. Our shop container conversions are unique and bespoke. Whether you already have an idea of what you want, or want us to recommend the perfect container solution for you, our tea
                                      m can make your business concept a reality.</p>
      									 
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
                                           <img class="slider-img img-responsive" src = "{{ URL::asset('/images/containerhouses-01.png')}}" alt = "First slide">
                                    </div>

                                    <div class="col-md-5">
                                      <h1 class="big-header blue"><b>Container Homes</b></h1>
                                      <h3 class="running-line red"><b> Durable, Convenient, yet Financially Friendly</b></h3>

                                      <p class="body-text">
                                                          Our container house solution is good for social housing or permanent housing solutions as well. Houses to be built are 100% custom built, we are open to work with our clients on the design so that we can fit their unique requests without compromise.
                                                          We also offer fully furnished options to those requests, that saves site labor cost, construction time tremendously.
                                      </p>
                         
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
                                           <img class="slider-img img-responsive" src = "{{ URL::asset('/images/carousel4.jpg')}}" alt = "First slide">
                                    </div>

                                    <div class="col-md-5">
                                      <h1 class="big-header blue"><b>Reefers</b></h1>
                                      <h3 class="running-line red"><b>Superior Perfomance, Quality and Reliable</b></h3>

                                      <p class="body-text">
                                                          Carry your temperature-controlled container cargo confident in the knowledge that it has received the ultimate care and attention. Our reefers deliver uniform and consistent air temperatures. Perfect freshness is guaranteed through precise air temperature and air flow management, preventing produce from losing moisture or shrinking.
                                      </p>
                         
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
                                           <img class="slider-img img-responsive" src = "{{ URL::asset('/images/carousel5.jpg')}}" alt = "First slide">
                                    </div>

                                    <div class="col-md-5">
                                      <h1 class="big-header blue"><b>Dry Containers</b></h1>
                                      <h3 class="running-line red"><b>Strong. Durable. Pocket Friendly</b></h3>

                                      <p class="body-text">
                                                          Our 20- and 40-foot dry containers - also known as standard containers - are the optimum transport solution for containerisable cargo of every description. This includes, for instance, cases, pallets, engine parts and plant components as well as rolls of paper or sheet metal and barrels. For rather more voluminous commodities, we additionally deploy 40' high cube containers, whose structure resembles that of the standard container, but which are built slightly higher.
                                      </p>
                         
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
                                           <img class="slider-img img-responsive" src = "{{ URL::asset('/images/carousel6.jpg')}}" alt = "First slide">
                                    </div>

                                    <div class="col-md-5">
                                      <h1 class="big-header blue"><b>Roadshow Trucks</b></h1>
                                      <h3 class="running-line red"><b> Durable, Convenient, yet Financially Friendly</b></h3>

                                      <p class="body-text">
                                              Spacious and quick to set up. It has a fantastic balance of usable space. From agile, quick response exhibition trailers to show-stopping mobile event spaces, we have the right technology to meet any roadshow challenge
                                      </p>
                         
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
                                           <img class="slider-img img-responsive" src = "{{ URL::asset('/images/offices-01.png')}}" alt = "First slide">
                                    </div>

                                    <div class="col-md-5">
                                      <h1 class="big-header blue"><b>Business Offices</b></h1>
                                      <h3 class="running-line red"><b>Appealing, Professional and Convinient</b></h3>

                                      <p class="body-text">

                                            If you have an expanding business that requires more space to remain productive, we can help. Our shipping container office solutions range from basic home office conversions to multi storey developments that will help you and your business flourish.
                                      </p>
                         
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
                     <a class = "carousel-control left" href = "#myCarousel" data-slide = "prev"><!--<img class="img-responsive carousel-image-left" src = "{{ URL::asset('/images/carousel-LEFT-02.png')}}" alt = "Left"><--></a>
                     <a class = "carousel-control right" href = "#myCarousel" data-slide = "next"><!--<img class="img-responsive carousel-image-right" src = "{{ URL::asset('/images/carousel-right-02.png')}}" alt = "Left">--></a>
             
                  </div> 
             </div>

<!--Products Div-->

<div class="container-fluid product-holder">

      <div class="container products">

            <h2 class="blue category-header"><b>Our Products</b></h2>
             

            <div class="col-md-4">
                <div class="product-box">
                  <img class="img-responsive product-image" src = "{{ URL::asset('/images/dry-containers.jpg')}}" alt = "First slide">
                                        
                      <p class="product-text" align="left">Our 20- and 40-foot dry containers - also known as standard containers - are the optimum transport solution for containerisable cargo of every description. This includes, for instance, cases, pallets, engine parts and plant components as well as rolls of paper or sheet metal and barrels. For rather more voluminous commodities, we additionally deploy 40' high cube containers, whose structure resembles that of the standard container, but which are built slightly higher.</p>
                      <!-- <p class="price-text" align="left"><span class="gray">20ft at Ksh. 180,000/-</span><b> | </b><span class="gray">40ft at Ksh. 280,000/-</span></p> -->
                    <ul class="price-list">
                      <li><span class="gray">20ft at Ksh. 180,000/-</span></li>
                      <li><span class="gray">40ft at Ksh. 310,000/-</span></li>
                    </ul>

                    <div class="buttons-container">  
                      <button class="btn btn-danger cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                      <button class="btn btn-default cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>View Images</b></button>
                    </div>
                  </div>
                  


                <div class="product-box">
                  <img class="img-responsive product-image" src = "{{ URL::asset('/images/office-containers.png')}}" alt = "First slide">
                  <p class="product-text" align="left">If you have an expanding business that requires more space to remain productive, we can help. Our shipping container office solutions range from basic home office conversions to multi storey developments that will help you and your business flourish. </p>
                  
                  <ul class="price-list">
                      <li><span class="gray">20ft at Ksh. 500,000/-</span></li>
                      <li><span class="gray">40ft at Ksh. 800,000/-</span></li>
                    </ul>

                    <div class="buttons-container">  
                      <button class="btn btn-danger cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                      <button class="btn btn-default cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>View Images</b></button>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="product-box">
                  <img class="img-responsive product-image" src = "{{ URL::asset('/images/reefers.jpg')}}" alt = "First slide">
                  <p class="product-text" align="left">Carry your temperature-controlled container cargo confident in the knowledge that it has received the ultimate care and attention. Our reefers deliver uniform and consistent air temperatures. Perfect freshness is guaranteed through precise air temperature and air flow management, preventing produce from losing moisture or shrinking.</p>
                  
                  <ul class="price-list">
                      <li><span class="gray">20ft at Ksh. 1.3m </span></li>
                      <li><span class="gray">40ft at Ksh. 1.4m </span></li>
                    </ul>

                    <div class="buttons-container">  
                      <button class="btn btn-danger cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                      <button class="btn btn-default cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>View Images</b></button>
                    </div>

                </div>


                <div class="product-box">
                  <img class="img-responsive product-image" src = "{{ URL::asset('/images/cyber.jpg')}}" alt = "First slide">
                  <p class="product-text" align="left">Create a distinctive customer experience in a shipping container cyber. Our cyber container conversions are unique and bespoke. Whether you already have an idea of how you want it done, or want us to recommend the perfect container cyber solution for you, our team can make your business concept a reality.</p>
                  
                  <ul class="price-list">
                    
                    </ul>

                    <div class="buttons-container">  
                      <button class="btn btn-danger cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                      <button class="btn btn-default cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>View Images</b></button>
                    </div>

                </div>
            </div>


            <div class="col-md-4">
                <div class="product-box">
                  <img class="img-responsive product-image" src = "{{ URL::asset('/images/stalls.jpg')}}" alt = "First slide">
                  <p class="product-text" align="left">Create a distinctive customer experience in a shipping container shop. Our shop container conversions are unique and bespoke. Whether you already have an idea of what you want, or want us to recommend the perfect container solution for you, our team can make your business concept a reality.</p>
                  
                  <ul class="price-list">
                      <li><span class="gray">20ft at Ksh. 320,000/-</span></li>
                      <li><span class="gray">40ft at Ksh. 520,000/-</span></li>
                    </ul>

                    <div class="buttons-container">  
                      <button class="btn btn-danger cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                      <button class="btn btn-default cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>View Images</b></button>
                    </div>

                </div>

                <div class="product-box">
                  <img class="img-responsive product-image" src = "{{ URL::asset('/images/homes.jpg')}}" alt = "First slide">
                  <p class="product-text" align="left">Our container house solution is good for social housing or permanent housing solutions as well. Houses to be built are 100% custom built, we are open to work with our clients on the design so that we can fit their unique requests without compromise.
                                                          We also offer fully furnished options to those requests, that saves site labor cost, construction time tremendously.</p>
                  
                  <ul class="price-list">
                      <li><span class="gray">Bedsitter at Ksh. 550,000/-</span></li>
                      <li><span class="gray">1 bedroom at Ksh. 900k</span></li>
                      <li><span class="gray">2 bedroom at Ksh. 1.5m</span></li>
                      <li><span class="gray">3 bedroom at Ksh. 1.95m</span></li>
                    </ul>

                    <div class="buttons-container">  
                      <button class="btn btn-danger cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                      <button class="btn btn-default cat-button" type="button" data-toggle="modal" data-target="#myModal"><b>View Images</b></button>
                    </div>

                </div>
            </div>

    </div>
  </div>

<!--end products div-->


      <!--Testimonials-->
      <div class="container-fluid">
          <div id="testimonialCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
              <div class="col-md-8 col-md-offset-2">
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row testimony-container">
                      <div class="col-md-4 col-xs-4">
                        <img class="testimonial-image" src="{{ URL::asset('/images/bakery-lady.png')}}" alt="salon-lady">
                      </div>

                      <div class="col-md-8 col-xs-8 tesimonial-text">
                        <h3 class="red testimonial-header">Set up a salon, fast and easy!</h3>
                        <p>If you are looking to set up a salon business within a very short time, a containers salon is probably the best bet. Its easy to set up and interiors are well fitted</p>
                        <p class="blue">~Salon Owner</p>
                      </div>
                    </div>
                  </div>

                  <div class="item">
                      <div class="row testimony-container">
                          <div class="col-md-4 col-xs-6">
                            <img class="testimonial-image" src="{{ URL::asset('/images/barber-guy.png')}}" alt="Chicago">
                          </div>

                          <div class="col-md-8 col-xs-6 tesimonial-text">
                              <h3 class="red testimonial-header">Try a Container Fabricated Cyber</h3>
                              <p>Cyber businesses are a big deal in this digital era. If you looking to set up one with a limited budget, you should consider a container cyber as an option</p>
                              <p class="blue">~Cyber Owner</p>
                          </div>

                      </div>
                  </div>

                  <div class="item">
                      <div class="row testimony-container">
                          <div class="col-md-4 col-xs-4">
                              <img class="testimonial-image" src="{{ URL::asset('/images/salon-lady.png')}}" alt="New York">
                          </div>

                          <div class="col-md-8 col-xs-8 tesimonial-text">
                            <h3 class="red testimonial-header">Its better and more appealing</h3>
                            <p>Container fabricated house are more appealing, with better looking interiors at a fraction of the price it would cost to buy an entire house</p>
                            <p class="blue">~Home Owner</p>
                          </div>
                      </div>
                  </div>


                 </div>
            </div>

              </div>
        </div>
      <!--End Testimonial-->
        
          

           
            <div class="container-fluid gray-bg aboutus">
                  <div class="container">
                    <div class="col-md-8 col-md-offset-2 about-us-container">
                        <h2 class="aboutus-header blue"><b>A Little About Us</b></h2>
                        <p class="about-text">Containers World Kenya was started back in 2007 as a dry shipping
                            Container company by private investors who had invested time trying to
                            understand the business after realizing a missing gap in the market.Due
                            to increasing clients demands and need to satisfy them , containers Kenya
                            was able to grow into not just a dry container dealing company but one
                            that can fabricate the containers into consumer customized products. Over
                            years of dedication , professionalism and experience we have been able to
                            grow to the best recognized container selling (dry and refrigerated) and
                            fabrication company. <a href="#" class="about_us"><b>Read more...</b></a>
                        </p>
                  </div>
                </div>
            </div>
      



		
		</div>
		<!-- End Ajax Update Div -->


        <!--Modal Start Check-->

  <!-- Modal -->
      <div class="modal fade  order_modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                          <select class=" type form-control" name="type" placeholder="What do you want the container for?" required>
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
                          <select class="size form-control" name="size"  required>
                            <option>-- Size --</option>
                            <option>2O Ft.</option>
                            <option>40 Ft.</option>
                          </select>
                        </div>
                        
                        <div class="input-group spacer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                          <input type="text" class="form-control" name="name" placeholder="Your Name."  required>
                        </div>

                        <div class="input-group spacer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="text" class="form-control" name="phone_number" placeholder="Your Phone Number" required>
                        </div>

                         <div class="input-group spacer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>
						<div class="input-group spacer">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                          <input type="number" class="form-control" name="no" placeholder="Enter Quantity" required>
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
                 <input class="form-control" type="text"  placeholder="please enter your name" name="name"  required>
            </div>
			<div class="form-group">
                 <input class="form-control" type="text"  placeholder="please enter your phone number" name="no"  required>
            </div>
            <div class="form-group">
                 <input class="form-control" type="email"  placeholder="please enter email" name="email"  required>
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
	  <!-- order sucess modal -->
			<div class="modal fade" id="o_suc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document" >
          <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
          </div>
          <div class="modal-body">
                <p>A Quotation Will Be Sent to Your Email..............</p>
            
            
          </div>

          <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
          </div>
          </div>
        </div>

      </div>
	  
	  <!-- End  order sucess modal  -->
	  
	  <!-- catalogue send success modal -->
		<div class="modal fade" id="c_suc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
				<div class="modal-dialog" role="document" >
				  <div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
				  </div>
				  <div class="modal-body">
						<p>A Catalogue Will Be Sent to Your Email..............</p>
					
					
				  </div>

				  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					  
				  </div>
				  </div>
				</div>

      </div>
	  <!--END catalogue send success modal-->

     
      <!--  START OF FOOTER   -->

<div class="container-fluid contact-us">
                <div class="container">
                    <script src="/js/msg/msg.js"></script>
                            <div class="col-md-5 col-md-offset-1 question-form">
                                <h3 class="red"><b>Still have a Question?</b></h3>

                                <form class="msg_form">
								{{csrf_field()}}
								<div class="form-group">
                                      <label for="usrr">Your Name</label>
                                      <input type="text" class="form-control theemail" id="usrr" name="name">
                                    </div>
                                    <div class="form-group">
                                      <label for="usr">Your Email</label>
                                      <input type="email" class="form-control theemail" id="usr" name="email">
                                    </div>

                                    <div class="form-group">
                                    <label for="pwd">Message</label>
                                      <textarea class="message form-control" rows="3" id="message" name="message"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-danger pull-right submitmessage"><span class="glyphicon glyphicon-share"></span> <b>Leave us a Message</b> </button>
                                    
                                </form>
                            </div>

                    <div class="col-md-5 gray-bg get-in-touch">
                        <h3 class="red"><b>Get in Touch with us.</b></h3>

                        <div class="row contact-line">

                            <div class="col-md-1 col-xs-2">
                                <img class="img-responsive icon-contact" src="{{ URL::asset('/images/contact-icon-01.png')}}"/>
                            </div>

                            <div class="col-md-11 col-xs-10">
                                <b>Along Kuguru Loop</br>Off Entreprise Road near General Motors</br> Mombasa road</b>
                           
                           <!-- <div class="col-md-10">
                                Omega Opticians Limited 2nd Floor,<br>
                                Pioneer House Kimathi street <br>
                                P.O Box 61441 – 00200 Nairobi, <br>
                                Kenya
                            </div>
                            -->
                            </div>
                        </div>

                        <div class="row contact-line">
                            <div class="col-md-1 col-xs-2">
                                <img class="img-responsive icon-contact" src="{{ URL::asset('/images/contact-icon-02.png')}}"/>
                            </div>

                             <div class="col-md-11 col-xs-10">
                                 <b>+254 797 66 33 72 (Mary)</b></br>
                                <b>+254 707 05 30 48 (John)</b>
                            </div>
                           
                        </div>

                        <div class="row contact-line">
                            <div class="col-md-1 col-xs-2">
                                <img class="img-responsive icon-contact" src="{{ URL::asset('/images/contact-icon-03.png')}}"/>
                            </div>

                             <div class="col-md-11 col-xs-10">
                                <b>admin@containerskenya.com</b>
                            </div>
                        </div>

                    </div>
                </div>
        </div>

            <div class="container-fluid web-foot">
                <p class="text-center white"><b>Containers Kenya 2107. All rights reserved.</b></p>
            </div>
			<!--msg success modal  -->
			<div class="modal fade" id="msg_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog" role="document" >
          <div class="modal-content">
            <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
          </div>
          <div class="modal-body">
                <p>Your Message  Has been Sent we'll email soonest</p>
            
            
          </div>

          <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              
          </div>
          </div>
        </div>

      </div>
	  <!-- End msg success modal  -->
	  
	  
	  <!-- End footer ---->
	  
	   <script src="/js/order/form.js"></script>
      <script  src="/js/cat/form.js"></script>
	  </body>
	  </html>
