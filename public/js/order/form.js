$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	
	$(".order_form").submit( function(e){
		e.preventDefault();
		var d = new FormData(this );
		$.ajax({
			type:"POST",
			url:"/send/quote",
			processData:false,
			contentType:false,
            data:d,
            success:function(data){
				$(".quote_btn").remove();
			     $(".modal-body").empty().html(data);
			}			
			});
			//alert("test");
	} );
	$(".test").click().modal();
} );