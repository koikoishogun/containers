
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
	<script src=""></script>
     
	  








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
                          <textarea class="form-control"  rows="3"  name="desc  "     required></textarea>
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
          <a class="" href="admin-panel"><img class="admin-menu-icon img-responsive" src="{{ URL::asset('/images/orders.jpg')}}"/></a>
          <a class="" href="interested"><img class="admin-menu-icon img-responsive" src="{{ URL::asset('/images/interested.jpg')}}"/></a>
          
          <a class="" href="post-blog"><img class="admin-menu-icon img-responsive" src="{{ URL::asset('/images/blog.jpg')}}"/></a>

          <a class="" href="#" data-toggle="modal" data-target="#imageUpload"><img class="admin-menu-icon img-responsive" src="{{ URL::asset('/images/images.jpg')}}"/></a>
    </div>
</div>
      @yield('content')
