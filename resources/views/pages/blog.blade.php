
<div class="container">
	@if(  isset($posts)  )
		@foreach( $posts as $value)
			<div class="row blog-content">
				<div class="col-md-8 col-sm-8">
					<h3 class="blue blog-head-text"><b>{{$value->title}}</b></h3>

					<!--<h3 class="red"></h3>-->
					<p class="blog-sign gray-text">By {{$value->name}}&nbsp;&nbsp;&nbsp;Posted  {{$value->created_at->diffForHumans()}}</p>
					<!--<img class="img-responsive blog-image" src="{{ base64_encode($value->image   )     }}" alt="container"/> -->
					<img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->image); ?>" />
					<p class="gray blog-text">
					{{!!$value->body!!}}
					</p>
				</div>
		



	        </div>
	    @endforeach
   @endif
</div>

