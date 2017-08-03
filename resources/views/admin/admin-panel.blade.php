
@extends('layouts.admin-master')


@section('content')
	
	<div class="container">
		<div class="row">
			<h1 class="red orders-title"><b>Orders</b></h1>
			@if(   isset(  $order) )
					@foreach(  $order as $value   )
						<div class="col-md-6 order-card">
							<h3 class="blue name"><b>{{$value->name}}</b></h3>
							<p class="contacts"><span class="glyphicon glyphicon-phone" aria-hidden="true"></span> {{$value->phone_number}} |  <span class="glyphicon glyphicon-envelope" aria-hidden="true"> </span>  {{$value->email}} </p>

							<h4 class="order-details-title red"><b>Order Details</b></h4>

							<p class="order-details"><span class="blue"><b>Size:</b></span> {{$value->size}} </p>
							<p class="order-details"><span class="blue"><b>Use:</b></span>{{$value->type}}</p>
							<p class="order-details"><span class="blue"><b>Quantity:</b></span>{{$value->number}} </p>
							<p class="order-signature">Order made <span class="blue">{{ $value->created_at->diffForHumans() }}</span></p>

						</div>
			        
					@endforeach
			@endif


			
		</div>
	</div>


@endsection