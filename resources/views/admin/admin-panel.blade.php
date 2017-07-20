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
	<script src="/js/admin/cat/up_cat.js"></script>

    <div class="container-fluid">
        <div class="col-md-2">
            <div class="row side_bar">
                <h2 class="admin-title white"><b>AdminPanel</b></h2>
            </div>

            <div class="row admin-panel-body">
                <a class="admin-link"><i class="glyphicon glyphicon-check"></i>Interested</a>
                <a class="admin-link"><i class="glyphicon glyphicon-check"></i>Requested Catalogue</a>
                <a class="admin-link"><i class="glyphicon glyphicon-check"></i>Requested Catalogue</a>


            </div>
        </div>

        <div class="col-md-10">

            <div class="row section">
                <h2><b>Interested Users</b></h2>
                    <ol>
                        <li>
                            <h4>John Doe</h4>
                        </li>

                        <p>Mobile: 0712345678</p>
                        <p>Date: 2 days ago. 11th July 2017</p>

                    </ol>
            </div>
			<div >
			   <button type="button"  data-toggle="modal" data-target="#cat_modal">Upload Catalogue</button>
			</div>
			<div>
			 <p>Quotations Sent</p>
						 @if ( isset($q) )
							@foreach ($q as $value)
                             <div>						
							<p>{{$value->type}}</p>
							<p>{{$value->size}}</p>
							<p>{{$value->name}}</p>
							<p>{{$value->phone_number}}</p>
							<p>{{$value->email}}</p>
				            </div><br>
							@endforeach
						@endif
			</div>
			<!-- upload catalogue modal  -->
			<div id="cat_modal"  class="modal fade"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
			    <div class="modal-dialog">
				   <div class="modal-content">
				    <form class="up_cat">
					{{csrf_field()}}
				      <div class="modal-header">
					     <h1 class="modal-title" id="exampleModalLabel1">Customize Your Container</h1>
			             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
					  </div>
				      <div class="modal-body up_empty">
					    <input type="text" name="name" >
						<input type="file" name="cat">
					  
					  </div>
				      <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class=" quote_btn btn btn-primary up_remove">Upload Catalogue</button>
					  </div>
					  </form>
					  
				   </div>
				</div>
			    
			
			</div>

        </div>
    </div>

        <script src="{{ URL::asset('/js/jquery.js')}}"></script>
        <script src="{{ URL::asset('/js/bootstrap.js')}}"></script>
        <script src="{{ URL::asset('/js/omega.js')}}"></script>

    </body>
   </html>