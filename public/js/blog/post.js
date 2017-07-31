$(document).ready(function (){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".blo_form").submit( function(e){
		e.preventDefault();
		
		var dat =new FormData(this);
		$.ajax({
			type:"POST",
			url:"/post/a/blog",
			contentType:false,
			processData:false,
			data:dat,
			success:function(data){
				$(".bg_ps").empty().html(data);
			}
		});
		//alert("test");
		
	} );
	
	
});