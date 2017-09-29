
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

          <!-- Global Site Tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107155686-1"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments)};
              gtag('js', new Date());
              gtag('config', 'UA-107155686-1');
            </script>

    </head>
  
    <body>
    
					  <!--Nav Bar-->
<div class="container-fluid  after">
            <nav class="navbar navbar-default d_rm">
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
                    <li class="blue"><a  class="home"  href="#" ><b>Home</b></a></li>
                    <li class="blue"><a class="about_us"   href="#" ><b>About Us</b></a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Our Products</b><span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"    class="produc">Dry Containers</a></li>
                        <li><a href="#"   class="produc" >Homes</a></li>
                        <li><a href="#"   class="produc" >Offices</a></li>
                        <li><a href="#"    class="produc" >Stalls</a></li>
                       <!-- <li role="separator" class="divider"></li> -->
                        <li><a href="#">Reefers</a></li>
                      </ul>
                    </li>
                    <li class="blue"><a href="#" class="bloga"><b>Blog</b></a></li>
                    <button type="submit" class="btn btn-danger order-button" data-toggle="modal" data-target="#myModal"><b>Order Now</b></button>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </div>


        <!--  end Nav Bar-->
	  
	  </body>
	  
	  </html>
