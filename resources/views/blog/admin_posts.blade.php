 <script src="/js/blog/post.js"></script>    
@if(isset( $posts ))
		@foreach( $posts as $value  )
		  
		   <h3 class="blue"><b>{{$value->title}}</b></h3>
                          <div class="posted-blog-container">
                              <p class="blue">{{$value->created_at->diffForHumans()}}</p>
                              <div class="buttons pull-right">
							        <b></b>
                                  <button type="submit" class="btn blog-btn btn-success"><b>update</b></button>
                                  <button type="submit" class="btn blog-btn btn-warning"><b>delete</b></button>
                              </div>
							  
                          </div>
		@endforeach
@endif