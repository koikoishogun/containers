<div>
    @if( isset( $msg )  )
		  @foreach(   $msg  as $value  )
	           <div>
						   {{$value->name}}
						   {{$value->email}}
							 {{  $value->body   }}
						{{  $value->created_at->diffForHumans()  }}
			   
			   
			   </div>
			  
		  @endforeach
     @endif

</div>