@extends('layouts.admin-master')


@section('content')


          
               <div class="container">
                    <div class="row blog-form-container">
                      <div class="col-md-6"> 
                          <h1 class="red">Post Your Blog</h1>
                                 <form class="order_form">
                             {{csrf_field()}}
                                      
                                      <div class="input-group spacer">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></span>
                                        <input type="text" class="form-control" name="blog_title" placeholder="Blog Title">
                                      </div>


                                      <div class="input-group spacer">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                                        <input type="text" class="form-control" name="blog_author" placeholder="Blog Author Name">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleTextarea">Blog Content</label>
                                        <textarea class="form-control" id="blog_content" rows="3"></textarea>
                                      </div>


                                      <div class="form-group">
                                        <label for="exampleInputFile">Upload Image</label>
                                        <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                                        <small id="fileHelp" class="form-text text-muted">Allowed image formats are JPG/JPEG/PNG</small>
                                      </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="quote_btn btn btn-primary"><b>Publish Bog</b></button>
                                  </div>
                                </form>
                      </div>


                      <div class="col-md-6 gray-bg">
                          <h3 class="blue"><b>Posted Blogs</b></h3>
                          <div class="posted-blog-container">
                              <p class="blue">This is my first Blogjovns lsdnvlkjsd...</p>
                              <div class="buttons pull-right">
                                  <button type="submit" class="btn blog-btn btn-primary">feature</button>
                                  <button type="submit" class="btn blog-btn btn-success"><b>update</b></button>
                                  <button type="submit" class="btn blog-btn btn-warning"><b>delete</b></button>
                              </div>
                          </div>
                          

                          
                      </div>

                      </div>
                    </div>
                </div>
<!--end Blogpost Form Modal-->

@endsection