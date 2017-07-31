$(document).ready(  function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".bg_btn").click(  function(){
		$.ajax({
			type:"GET",
			url:"/show/post/form",
			success:function(data){
				$(".bg_ps").empty().html(data);
			}
		});
		
	} );
	
	
} );