@extends('layouts.admin-master')


@section('content')
<script src="/js/blog/post.js"></script>

          
               <div class="container">
                    <div class="row blog-form-container">
                      <div class="col-md-6"> 
                          <h1 class="red">Post Your Blog</h1>
                                 <form class="blo_form   "   id="df">
                             {{csrf_field()}}
                                      
                                      <div class="input-group spacer">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
										@if( isset( $title ) )
                                        <input type="text" class="form-control" name="blog_title" placeholder="Blog Title"   required  value={{$title}}>
                                      
									    @else
										  <input type="text" class="form-control" name="blog_title" placeholder="Blog Title"   required >
										  
									  @endif
									  </div>


                                      <div class="input-group spacer">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										@if(isset($name)  )
                                        <input type="text" class="form-control" name="blog_author" placeholder="Blog Author Name"  required value={{$name}} >
									    @else
											<input type="text" class="form-control" name="blog_author" placeholder="Blog Author Name"  required>
											
									     @endif
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleTextarea">Blog Content</label>
										@if( isset($body) )
                                        <textarea class="form-control" id="blog_content" rows="3"  name="blog_content"  required   value=$body></textarea>
									     @else
									     <textarea class="form-control" id="blog_content" rows="3"  name="blog_content"  required></textarea>
									    @endif
                                      </div>


                                      <div class="form-group">
                                        <label for="exampleInputFile">Upload Image</label>
										@if(isset ($image) )
											<img  src="/storage/{{$image}} "   / >
										<label for="exampleInputFile1">Replace Image</label>
										<input type="file" class="form-control-file" id="exampleInputFile1" aria-describedby="fileHelp" name="img" required>
										@else
											<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="img" required>
											
										@endif
										
                                        
                                        <small id="fileHelp" class="form-text text-muted">Allowed image formats are JPG/JPEG/PNG</small>
                                      </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class=" btn btn-primary"><b>Publish Bog</b></button>
                                  </div>
                                </form>
                      </div>


                      <div class="col-md-6 gray-bg posts_div">
                          
                          

                          
                      </div>

                      </div>
                    </div>
                </div>
<!--end Blogpost Form Modal-->

@endsection