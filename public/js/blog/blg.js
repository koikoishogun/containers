$(document).ready(  function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".update_btn").each(  function(){
					$(this).click( function(){
					var id= $(".blg_id").val();
					$.ajax({
						type:"GET",
						url:"/update/blog/form/"+id,
						async:true,
						success:function(data){
							$(".update_div").empty().html(data);
							
									}
					});
				
				
			} );
		
	} );