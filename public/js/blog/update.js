$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".update_div").on( "submit",".update_blog",function(e){
		e.stopImmediatePropagation();
		e.preventDefault();
		var d= new FormData(this);
		$.ajax({
			type:"POST",
			url:"/update/blog",
			data:d,
			async:true,
			contentType:false,
			processData:false,
			success:function(data){
				$(".update_div").empty().html(data);
				
			}
		});
		
		
	}    );
	
} );