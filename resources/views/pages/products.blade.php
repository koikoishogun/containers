@extends('layouts.master')
@section('content')
	
	<div class="container">

		<div class="row">
			<h1 class="blue"><b>Range of </br> Our Products</b></h1>
		</div>
		
		<div class="row product-category">
			<h3 class="red product-header"><b>Container Homes</b></h3>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>
		</div>


		<div class="row product-category">
			<h3 class="red product-header"><b>Office Blocks</b></h3>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>
		</div>


		<div class="row product-category">
			<h3 class="red product-header"><b>Reefers</b></h3>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>
		</div>


		<div class="row product-category">
			<h3 class="red product-header"><b>Dry Containers</b></h3>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>

			<div class="col-md-4 col-sm-6">
				<img class="img-responsive story-thumbnail" src="{{ URL::asset('/images/thumbnail.png')}}"/>
			</div>
		</div>


		

	</div>

@endsection
