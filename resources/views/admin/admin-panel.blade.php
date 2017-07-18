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

        </div>
    </div>

        <script src="{{ URL::asset('/js/jquery.js')}}"></script>
        <script src="{{ URL::asset('/js/bootstrap.js')}}"></script>
        <script src="{{ URL::asset('/js/omega.js')}}"></script>

    </body>
   </html>