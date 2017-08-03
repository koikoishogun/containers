$('document').ready(function(){

	 $('.carousel').carousel({
      interval: 3000
    }) 



	 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(".submitmessage").click(
	function(e){
		e.preventDefault();
		
		var thisButton = this;
			$(thisButton).html("Sending...");
		var formdata = $(".themail").val();
		var formdata2 = $(".message").val();
		
		
		$.ajax({
		  method: "POST",
		  url: "send-message",
		  data: {'email':formdata, 'message':formdata2}
		})
		  .done(function() {
		  $(thisButton).html("Received");
		  $('.email').val('');
		  });
		  
		  console.log(formdata);
		  console.log(formdata2);
	});


$(".book-appointment").click(
	function(e){
		e.preventDefault();
		
		var thisButton = this;
			$(thisButton).html("Booking...");
		var apformdata = $(".email").val();
		var apformdata2 = $(".day").val();
		var apformdata3 = $(".time").val();
		var apformdata4 = $(".branch").val();
		var apformdata5 = $(".phoneno").val();
		
		
		$.ajax({
		  method: "POST",
		  url: "book-appointment",
		  data: {'email':apformdata, 'day':apformdata2, 'time':apformdata3,  'branch':apformdata4, 'phoneno':apformdata5 }
		})
		  .done(function() {
		  $(thisButton).html("Booked Successfully!");
		  $('.email').val('');
		  });
		  
		  console.log(apformdata);
		  console.log(apformdata2);
		  console.log(apformdata5);
	});

	$('#myCarousel').carousel({
	interval: 0
	});
    
    $('#myCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});

		
		$('#testimonialCarousel').carousel({
			interval:2000;
			});

		 $('#testimonialCarousel').on('slid.bs.carousel', function() {
    	//alert("slid");
	});


	$("#publishblog").click(
	function(e){
		e.preventDefault();
		
		var thisButton = this;
			$(thisButton).html("Publishing...");
		var titleblog = $("#blogtitle").val();
		var bodyblog = $("#blogbody").val();

		
		
		$.ajax({
		  method: "POST",
		  url: "publish-blog",
		  data: {'blogtitle':titleblog, 'blogbody':bodyblog }
		})
		  .done(function() {
		  $(thisButton).html("Published Successfully!");
		  $('.email').val('');
		  });
		 
		  console.log(titleblog);
		  console.log(bodyblog);
	});





});