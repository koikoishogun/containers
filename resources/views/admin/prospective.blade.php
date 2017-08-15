<div class="container">
	<h1 class="red orders-title"><b>Interested</b></h1>
	@if(  isset($subs) )
		@foreach( $subs as $value)
			<div class="row">

				
				
				 
				<div class="col-md-12 order-card">
					<h4 class="blue name"><b>{{$value->name}}</b></h4>
					<p class="interested-details"><span class="glyphicon glyphicon-envelope"></span>&nbsp;{{$value->email}}&nbsp;&nbsp;| &nbsp;&nbsp;<span class="glyphicon glyphicon-phone"></span>&nbsp;{{$value->phone_no}}</p>
					<p class="catalogue-signature">Catalogue sent <span class="blue">{{$value->created_at->diffForHumans()}}</span> </p>

				</div>
					
		  </div>
	  @endforeach
	@endif
	</div>