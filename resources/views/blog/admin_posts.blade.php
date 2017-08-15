  <script   src="/js/blog/blg.js" ></script>
@if(isset( $posts ))
		@foreach( $posts as $value  )
		  <div class="postblogs">
		  <input type="hidden"  value="{{$value->id }}" class="blg_id" />
			 <h3 class="blue"><b>{{$value->title}}</b></h3>
			  <div class="posted-blog-container">
				  <p class="blue">{{$value->created_at->diffForHumans()}}</p>
				  <div class="buttons pull-right">
						<b></b>
					  <button type="button" class="btn blog-btn btn-success  update_btn"><b>update</b></button>
					  <button type="button" class="btn blog-btn btn-warning delete_btn"><b>delete</b></button>
				  </div>
				  
			  </div>
	   </div>
		@endforeach
@endif