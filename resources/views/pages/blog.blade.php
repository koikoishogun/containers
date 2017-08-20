
<div class="container">
	
			<div class="row blog-content">
				<div class="col-md-8 col-sm-8">

				@if(  isset($posts)  )
		@foreach( $posts as $value)
					<h3 class="blue blog-head-text"><b>{{$value->title}}</b></h3>

					<!--<h3 class="red"></h3>-->
					<p class="blog-sign gray-text">By {{$value->name}}&nbsp;&nbsp;&nbsp;Posted  {{$value->created_at->diffForHumans()}}</p>
					<!--<img class="img-responsive blog-image" src="{{ base64_encode($value->image   )     }}" alt="container"/> -->
					<img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->image); ?>" />
					<p class="gray blog-text">
					{!!$value->body!!}
					</p>
			 @endforeach
   @endif
				</div>


				<div class="col-md-4  blogs-container">
					
					<div class="blog-list-header">
						<h3 class="blue"><b>MORE BLOGS</b></h3>
					</div>

					<div class="row blog-story">
						<div class="col-md-4 col-xs-4 blog-thumbnail">
							<img  class="img-responsive story-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->image); ?>" />
						</div>

						<div class="col-md-8 col-xs-8">
							<a href="#" ><h5 class="blue blog-head-text"><b>Blog Story 1</b></h5></a>
							<p class="gray-text blog-details">Posted By: Marie Mburu. <span class="red">3 days ago</span></p>
						</div>
					</div>


					<div class="row blog-story">
						<div class="col-md-4 col-xs-4 blog-thumbnail">
							<img  class="img-responsive story-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->image); ?>" />
						</div>

						<div class="col-md-8 col-xs-8">
							<h5 class="blue blog-head-text"><b>Blog Story 1</b></h5>
							<p class="gray-text blog-details">Posted By: Marie Mburu. <span class="red">3 days ago</span></p>
						</div>
					</div>




				</div>
		



	        </div>
	   
</div>

