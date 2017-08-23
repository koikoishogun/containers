
<div class="container">
<div class="row blog-content">
@if(  isSet($fat))
         
					
	<div class="col-md-8 col-sm-8">
		
		<h3 class="blue blog-head-text"><b>{{$fat->title}}</b></h3>

		<!--<h3 class="red"></h3>-->
		<p class="blog-sign gray-text">By {{$fat->name}}&nbsp;&nbsp;&nbsp;Posted  {{$fat->created_at->diffForHumans()}}</p>
		<!--<img class="img-responsive blog-image" alt="container"/> -->
		<img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $fat->image); ?>" />
		<p class="gray blog-text">
		{!!$fat->body!!}
		</p>
		  
				  
					
	</div>
@else
	<p>No blogs Posted Yet...</p>
				
@endif
				
				
									
									
@if( isSet($posts) )
<!-- <div>
<div class="col-md-4  blogs-container">
<div class="blog-list-header">
	   <h3 class="blue"><b>MORE BLOGS</b></h3>
</div> -->
@foreach($posts as $value)
<div class="row blog-story">
<div class="col-md-4 col-xs-4 blog-thumbnail">
	<img class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->image); ?>"   />
</div>

<div class="col-md-8 col-xs-8">
	<a href="#" ><h5 class="blue blog-head-text"><b>{{$value->title}}</b></h5></a>
</div>

	<p class="gray-text blog-details">Posted By: {{$value->name}}. <span class="red">{{$value->created_at->diffForHumans()}}</span></p>
</div>
@endforeach
	

 
@else 
	<div><p>No Posts...</p></div>
	
@endif
</div>
</div>

											




								
							

	   


				
						

 
 
 

