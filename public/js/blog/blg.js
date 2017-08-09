$(document).ready(  function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".posts_div").on(  "click",".update_btn" ,function(e){
		e.stopImmediatePropagation();
		//e.stopPropagation();
		//alert("test");
		var id= $(".blg_id").val();
					$.ajax({
						type:"GET",
						url:"/update/blog/form/"+id,
						async:true,
						success:function(data){
							$(".form_update").empty().html(data);
							
									}
					});
		
	} );
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
				alert("Blog has been updated successfully");
				$(".update_div").empty().html(data);
				
			}
		});
		
		
	}    );
	$(".posts_div").on(  "click",".delete_btn" ,function(e){
		e.stopImmediatePropagation();
		//e.stopPropagation();
		//alert("test");
		var id= $(".blg_id").val();
					$.ajax({
						type:"GET",
						url:"/delete/post/"+id,
						async:true,
						success:function(data){
							alert("Post Deleted Successfully");
							$(".update_div").empty().html(data);
							
									}
					});
		
	} );
	
		
	} );
	