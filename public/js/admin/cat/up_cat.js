$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".up_cat").submit(  function(e){
		e.preventDefault();
		var d=new FormData(this);
		$.ajax({
			type:"POST",
			url:"/admin/upload/catalogue",
			processData:false,
			contentType:false,
			data:d,
			success:function(data){
				$(".up_remove").remove();
				$(".up_empty").empty().html(data);
			}
			
		});
	} );
	
	
} );