@extends('layouts.master')
@section('content')



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

<!--CONTAINER DIV-->

<div class="container-fluid gray-bg product-holder">

      <div class="container products">

            <h2 class="blue category-header"><b>Our Products</b></h2>
              <div class="row productline">
                <div class="col-md-4 product-box">
                  <img class="slider-img img-responsive" src = "{{ URL::asset('/images/dry-containers.jpg')}}" alt = "First slide">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                  <p><b>20ft at Ksh. 180,000/-</b></p>
                  <p><b>40ft at Ksh. 280,000/-</b></p>
                  <button class="btn btn-danger order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                </div>

                <div class="col-md-4 product-box">
                  <img class="slider-img img-responsive" src = "{{ URL::asset('/images/reefers.jpg')}}" alt = "First slide">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                  <p><b>20ft at Ksh. 180,000/-</b></p>
                  <p><b>40ft at Ksh. 280,000/-</b></p>
                  <button class="btn btn-danger order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                </div>

                <div class="col-md-4 product-box">
                  <img class="slider-img img-responsive" src = "{{ URL::asset('/images/stalls.jpg')}}" alt = "First slide">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                  <p><b>20ft at Ksh. 180,000/-</b></p>
                  <p><b>40ft at Ksh. 280,000/-</b></p>
                  <button class="btn btn-danger order_btn" type="button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                </div>

              </div>

              <div class="row productline">
                <div class="col-md-4 product-box">
                  <img class="slider-img img-responsive" src = "{{ URL::asset('/images/cyber.jpg')}}" alt = "First slide">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                  <p><b>20ft at Ksh. 180,000/-</b></p>
                  <p><b>40ft at Ksh. 280,000/-</b></p>
                </div>

                <div class="col-md-4 product-box">
                  <img class="slider-img img-responsive" src = "{{ URL::asset('/images/homes.jpg')}}" alt = "First slide">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                  <p><b>20ft at Ksh. 180,000/-</b></p>
                  <p><b>40ft at Ksh. 280,000/-</b></p>
                </div>

                <div class="col-md-4 product-box">
                  <img class="slider-img img-responsive" src = "{{ URL::asset('/images/roadshow.jpg')}}" alt = "First slide">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                  <p><b>20ft at Ksh. 180,000/-</b></p>
                  <p><b>40ft at Ksh. 280,000/-</b></p>
                </div>

              </div>
    </div>
  </div>

<!--END CONTAINER DIV-->

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
                                    <div class="col-md-3 col-md-offset-1 col-xs-4">
                                           <img class="testimony-image img-responsive" src = "{{ URL::asset('/images/avatar-bg.png')}}" alt = "First slide">
                                    </div>

                                    <div class="col-md-6 col-xs-8">
                                      <h2 class="red testimonial-header"><b>I Needed a stall for my salon</b></h2>
                                    
                                      <p class="">orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, by private investors who had invested time trying to</p>

                                      <p class="red"><b>-Njeri, Sole Proprieter</b></p>

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

            <div class="container-fluid gray-bg">

                  <div class="container">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="aboutus-header blue"><b>A Little About Us</b></h2>
                        <p class="about-text">Containers World Kenya was started back in 2007 as a dry shipping
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
            </div>
      </div>

      <!--End Testimonial-->

  @endsection
