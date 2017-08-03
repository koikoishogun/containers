$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	
	$(".cat_form").submit( function(e){
		e.preventDefault();
		var  d =new FormData(this);
		$.ajax({
			type:"POST",
			url:"/send/catalogue",
			data:d,
			async:true,
			processData:false,
			contentType:false,
			success: function(){
				$(".cat_form")[0].reset();
				$("#myModal").modal("hide");
				$("#o_suc").modal("show");
				//alert("hi");
				
			}
			
		}); 
		//
	} );

});