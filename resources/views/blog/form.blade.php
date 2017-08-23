                                       
									   <!--<script src="/js/blog/update.js"></script>-->
									   <h1 class="red">Post Your Blog</h1>
									   <form   class="update_blog">
									   {{csrf_field()}}
                                      @if(isset ($id) )
									     <input  type="hidden" name="id" value="{{$id}}"/>
									 @endif
                                      <div class="input-group spacer">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
										@if( isset( $title ) )
                                        <input type="text" class="form-control" name="blog_title" placeholder="Blog Title"   required  value="{{$title}}">
                                      
									    
										  
									  @endif
									  </div>


                                      <div class="input-group spacer">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
										@if(isset($name)  )
                                        <input type="text" class="form-control" name="blog_author" placeholder="Blog Author Name"  required value="{{$name}} ">
									    
											
									     @endif
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleTextarea">Blog Content</label>
										@if( isset($body) )
                                        <textarea class="form-control" id="exampleTextarea" rows="3"  name="blog_content"  required   >{{$body}} </textarea>

									    @endif
                                      </div>


                                      <div class="form-group">
                                        <label for="exampleInputFile">Uploaded Image</label>
										@if(isset ($image) )
											<!--<img  src="/storage/blog/{{$image}} "   / >  -->
										<img  class="img-responsive blog-image"  src="data:image/jpeg;base64,<?php echo base64_encode( $image); ?>" />
										<label for="exampleInputFile1">Replace Image With...</label>
										<input type="file" class="form-control-file" id="exampleInputFile1" aria-describedby="fileHelp" name="img" required>
										
											
										@endif
										
                                        
                                        <small id="fileHelp" class="form-text text-muted">Allowed image formats are JPG/JPEG/PNG</small>
                                      </div>

                                  <div class="modal-footer">
                                    
                                    <button type="submit" class=" btn btn-primary"><b>Publish Bog</b></button>
                                  </div>
								  </form>