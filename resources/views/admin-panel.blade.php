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

    <div class="row admin-content">

                <div class="container">
                    <ul class="nav nav-tabs">
                      <li class="active"><a data-toggle="tab" href="#home">Blog Manager</a></li>
                      <li><a data-toggle="tab" href="#menu1">Appointments</a></li>
                      <li><a data-toggle="tab" href="#menu2">Messages</a></li>
                    </ul>


                    <div class="tab-content">
                      <div id="home" class="tab-pane fade in active">
                        <h3>Blog Manager</h3>
                        <p>The blog manager helps you keep track of your blogs. Post, edit, delete your posts with convinience</p>

                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9">
                                        <h2>Post a new blog</h2>

                                        <form action="" method="post">
                                          <div class="form-group">
                                            <label for="blog_title">Blog Title:</label>
                                            <input type="text" class="form-control" id="blogtitle">
                                          </div>

                                          <div class="form-group">
                                            <label for="blogbody">Blog Body:</label>
                                            <textarea class="form-control" rows="8" id="blogbody"></textarea>
                                          </div>


                                          <button type="submit" class="btn btn-default" id="publishblog">Publish</button>
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        </form> 

                                    </div>
                                </div>
                            </div>
                      </div>

                      <div id="menu1" class="tab-pane fade">
                        <h3>Appointment Manager</h3>
                        <p>Appointment Manager is a tool that helps you track appintments to your different branches</p>
                        <h2 class="red">Booked Appointments</h2>

                        <ol>
                         @foreach($appointments as $appointment)

                            <li><h4 class="gray">Email: {!! $appointment->email   !!} </h4></li>

                            <p> <b> Number:</b>{!! $appointment->phone_number  !!} </p>
                            <p> <b> Branch:</b>{!! $appointment->branch  !!} </p>
                
                        @endforeach
                        </ol>
                      </div>

                      <div id="menu2" class="tab-pane fade">
                        <h3>Message Manager</h3>
                        <p>Understand what you customer wants. Messages, Reviews, Comments, Enquiries</p>
                      </div>

                    </div>
                </div>

            </div>

            

        <script src="{{ URL::asset('/js/jquery.js')}}"></script>
        <script src="{{ URL::asset('/js/bootstrap.js')}}"></script>
        <script src="{{ URL::asset('/js/omega.js')}}"></script>

    </body>
   </html>