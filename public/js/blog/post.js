$(document).ready(function (){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".blo_form").submit( function(e){
		e.preventDefault();
		
		var d =new FormData(this);
		$.ajax({
			type:"POST",
			url:"/post/a/blog",
			contentType:false,
			processData:false,
			async:true,
			data:d,
			success:function(data){
				//$(".bg_ps").empty().html(data);
				$(".blo_form")[0].reset();
				//alert("Blog Updated Successfully............");
				$(".posts_div").empty().html(data);				}
		});
		//alert("test");
		
	} );
	$(".update_btn").click( function(){
        var id= $(".blg_id").val();
		$.ajax({
			type:"GET",
			url:"/update/blog/form/"+id,
			async:true,
			success:function(data){
				
						}
		});
		//alert("test");
		
	} );
	function refresh(){
		var s=$("#q_id").val();
		$.ajax( {
		url:"/admin/view/posts",
		type:"GET",
		async:true,
		timeout:3000,
		success:function (data){
			$(".posts_div").empty().html(data);
			
		}
		
		
	} );
	}
	
	setInterval(refresh,30000);
	
	
});