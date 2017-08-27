<div>
    @if( isset( $msg )  )
		  @foreach(   $msg  as $value  )
	           <div class="col-md-8 message-body">
						   <h3 class="blue"> {{$value->name}} </h3><br>
						   <p class="gray-text msg-email"> <b> {{$value->email}} </b> </p><br>
							 {{  $value->body   }}<br>
						   <p> {{  $value->created_at->diffForHumans()  }} </p><br>
			   
			   
			   </div>
			  
		  @endforeach
     @endif

</div>