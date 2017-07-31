@extends('layouts.master')
@section('content')

<div class="container">
	<div class="row blog-content">
		<div class="col-md-8 col-sm-8">
			<h1 class="blue blog-head-text"><b>Featured Story</b></h1>

			<h3 class="red">Ever wondered what those numbers on dry shipping containers mean? Heres what...</h3>
			<p class="blog-sign gray-text">By Jane Doe   Posted on 13th Feb 2017</p>
			<img class="img-responsive blog-image" src="{{ URL::asset('/images/blog-image.jpg')}}"/>
			<p class="gray blog-text">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
			</p>
		</div>



		<div class="col-md-4 blog-rightside gray-bg">
			<h3 class="red popular-title"><b>Popular Stories</b></h3>

			<div class="row blog-card">
				<div class="col-md-3 col-xs-3">
					<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
				</div>

				<div class="col-md-9 col-xs-9">
					<h4 class="blue"><b>Lorem ipsum dolor sit amet</b></h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut<a href="about-us"> <b>Read more...</b></a>
					</p>
					<p class="blog-sign gray-text">By Jane Doe   Posted on 13th Feb 2017</p>

				</div>
			</div>

			<div class="row blog-card">
				<div class="col-md-3 col-xs-3">
					<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
				</div>

				<div class="col-md-9 col-xs-9">
					<h4 class="blue"><b>Lorem ipsum dolor sit amet</b></h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					</p>
					<p class="blog-sign gray-text">By Jane Doe   Posted on 13th Feb 2017</p>
				</div>
			</div>
			
			<div class="row blog-card">
				<div class="col-md-3 col-xs-3">
					<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
				</div>

				<div class="col-md-9 col-xs-9">
					<h4 class="blue"><b>Lorem ipsum dolor sit amet</b></h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					</p>
					<p class="blog-sign gray-text">By Jane Doe   Posted on 13th Feb 2017</p>
				</div>
			</div>

			<div class="row blog-card">
				<div class="col-md-3 col-xs-3">
					<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
				</div>

				<div class="col-md-9 col-xs-9">
					<h4 class="blue"><b>Lorem ipsum dolor sit amet</b></h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					</p>
					<p class="blog-sign gray-text">By Jane Doe   Posted on 13th Feb 2017</p>
				</div>
			</div>
			
			<div class="row blog-card">
				<div class="col-md-3 col-xs-3">
					<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
				</div>

				<div class="col-md-9 col-xs-9">
					<h4 class="blue"><b>Lorem ipsum dolor sit amet</b></h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
					</p>
					<p class="blog-sign gray-text">By Jane Doe   Posted on 13th Feb 2017</p>
				</div>
			</div>

		</div>
	</div>
</div>

@endsection