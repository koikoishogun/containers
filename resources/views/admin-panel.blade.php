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

            <div class="row side_bar">
               <a class="navbar-brand" href="#"><img class="logo-icon img-responsive" src="{{ URL::asset('/images/logo-02.png')}}"/></a>
            </div>

            <div class="row admin-panel-body">
                <a class="admin-link"><i class="glyphicon glyphicon-check"></i>Interested</a>
                <a class="admin-link"><i class="glyphicon glyphicon-check"></i>Requested Catalogue</a>
                <a class="admin-link"><i class="glyphicon glyphicon-check"></i>Requested Catalogue</a>


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

        </div>
    </div>

        <script src="{{ URL::asset('/js/jquery.js')}}"></script>
        <script src="{{ URL::asset('/js/bootstrap.js')}}"></script>
        <script src="{{ URL::asset('/js/omega.js')}}"></script>

    </body>
   </html>