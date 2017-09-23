<script src="/js/img/pic.js"></script>
	
	<div class="container">

		<div class="row">
			<h1 class="blue"><b>Range of </br> Our Products</b></h1>
		</div>
		
		<div class="row product-category">
			<h3 class="red product-header"><b>Container Homes</b></h3>
            @if(isset($ho))
				<div class="col-md-4 col-sm-6 ">
				 @foreach($ho as $value)
					
				    <img  class="img-responsive story-thumbnail"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->image); ?>" />

					
			     @endforeach
				 {{$ho->links()}}
				 </div>
			@else
				<p> No pics to display...</p>
			
			
			@endif

			
			
		</div>


		<div class="row product-category">
			<h3 class="red product-header"><b>Office Blocks</b></h3>

			@if(isset($off))
				<div class="col-md-4 col-sm-6">
				 @foreach($off as $value)
					
						<img  class="img-responsive story-thumbnail"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->image); ?>" />

			      @endforeach
				  {{$off->links()}}
				</div>
		    @else
			       <p>No pics to display...</p>
			@endif

			
				
			
			
		</div>

		<div class="row product-category">
			<h3 class="red product-header"><b>Reefers</b></h3>

			@if(isset($re))
				<div class="col-md-4 col-sm-6">
				 @foreach($re as $value)
					
						<img  class="img-responsive story-thumbnail"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->image); ?>" />
					
			     @endforeach
				 {{$re->links()}}
			  </div>
			 @else
				 <p>No pics to display...</p>
			@endif
			

			
				
			

		</div>


		<div class="row product-category">
			<h3 class="red product-header"><b>Dry Containers</b></h3>

			@if(isset($dry))
				<div class="col-md-4 col-sm-6 ">
				 @foreach($dry as $value)
					
						<img  class="img-responsive story-thumbnail"  src="data:image/jpeg;base64,<?php echo base64_encode( $value->image); ?>" />
					
			     @endforeach
				 {{$dry->links()}}
				 </div>
	        @else
				<p>No pics to display...</p>
			@endif
			

			
				
		</div>


		

	</div>
	
