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
			data:d,
			success:function(data){
				//$(".bg_ps").empty().html(data);
				$(".blo_form")[0].reset();
				//alert("Blog Updated Successfully............");
				$(".posts_div").empty().html(data);				}
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