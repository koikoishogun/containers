<div>
    @if( isset( $msg )  )
		  @foreach(   $msg  as $value  )
	           <div>
						   {{$value->name}}<br>
						   {{$value->email}}<br>
							 {{  $value->body   }}<br>
						{{  $value->created_at->diffForHumans()  }}<br>
			   
			   
			   </div>
			  
		  @endforeach
     @endif

</div>