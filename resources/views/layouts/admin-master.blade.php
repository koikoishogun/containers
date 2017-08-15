
<!doctype html>

<html >
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script  src="/js/jquery-3.2.1.min.js"></script>
        <script  src="/js/jquery-ui.min.js"></script>
        <script  src="/js/bootstrap.js"></script>

        <!-- 
          <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        -->
        <link href="{{ URL::asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('/css/containerskenya.css')}}" rel="stylesheet">
        <title>Admin Panel</title>

       

    </head>
  
    <body>
	
     
	  





<!-- <button class="msg_li">Show Message</button>  -->


<!--Upload Images Form Modal-->
<div id="imageUpload" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload Images</h4>
              </div>
              <div class="modal-body">
                
                   <form class="img_form">
                           {{csrf_field()}}
                        

                        <div class="form-group">
                          <label for="exampleTextarea">Brief Image Description</label>
                          <textarea class="form-control"  rows="3"  name="descri"     required></textarea>
                        </div>


                        <div class="form-group">
                          <label for="exampleInputFile">Upload Image</label>
                          <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="img"  required>
                          <small id="fileHelp" class="form-text text-muted">Allowed image formats are JPG/JPEG/PNG</small>
                        </div>
						<div class="form-group">
                          <label for="cat">Category</label>
                          <select id="cat" class="form-text text-muted" name="cat"    required>
									  <option>Dry Containers</option>
									  <option>Reefers</option>
									  <option>Office Block</option>
									  <option>Homes</option>
						  </select>
                        </div>

                    
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="submit" class=" quote_btn btn btn-primary"><b>Upload</b></button>
                    </div>
                  </form>

                </div>

          </div>
        </div>

<!--End Uplaod Image-->







<!--Nav Bar-->
<div class="container-fluid admin-menu-bar">

   <img class="admin-logo logo-icon img-responsive" src="{{ URL::asset('/images/logo-02.png')}}"/>

    <div class="pull-right">
          <a class="order_li" href="#"><img class="admin-menu-icon img-responsive" src="{{ URL::asset('/images/orders.jpg')}}"/></a>
          <a class="int_li" href="#"><img class="admin-menu-icon img-responsive" src="{{ URL::asset('/images/interested.jpg')}}"/></a>
          
          <a class="blog_li" href="#"><img class="admin-menu-icon img-responsive" src="{{ URL::asset('/images/blog.jpg')}}"/></a>

          <a class="#" href="#" data-toggle="modal" data-target="#imageUpload"><img class="admin-menu-icon img-responsive" src="{{ URL::asset('/images/images.jpg')}}"/></a>
    </div>
</div>
<!--UPDATE  AJAX DIV -->
<div   class="container update_div">
			<div class="container">
		<div class="row">
			<h1 class="red orders-title"><b>Orders</b></h1>
			@if(   isset(  $order) )
					@foreach(  $order as $value   )
						<div class="col-md-6 order-card">
							<h3 class="blue name"><b>{{$value->name}}</b></h3>
							<p class="contacts"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> {{$value->phone_number}} |  <span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span>  {{$value->email}} </p>

							<h4 class="order-details-title red"><b>Order Details</b></h4>

							<p class="order-details"><span class="blue"><b>Size:</b></span> {{$value->size}} </p>
							<p class="order-details"><span class="blue"><b>Use:</b></span>{{$value->type}}</p>
							<p class="order-details"><span class="blue"><b>Quantity:</b></span>{{$value->number}} </p>
							<p class="order-signature">Order made <span class="blue">{{ $value->created_at->diffForHumans() }}</span></p>

						</div>
			        
					@endforeach
			@endif


			
		</div>
	</div>





</div>
<!--  END UPDATE  AJAX DIV -->
<script src="/js/admin/links/link.js"></script>


<script src="/js/cat/form.js"></script>
	<script   src="/js/order/form.js"></script>
	<script   src="/js/msg/show_admin.js"></script>
	<script   src="/js/img/form.js"></script>
    </body>
	</html>
