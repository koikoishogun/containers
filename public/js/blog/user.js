$(document).ready(  function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	
	$(".user_click").each( function(){
		
		$(this).click(  function(e){
				e.stopImmediatePropagation();
				e.preventDefault();
				var d=$(this).attr("id");
				$.ajax({
				type:"GET",
				url:"/view/post/"+d,
				async:true,
				success: function(data){
					$(".blg_up").empty().html(data);
					//alert("hi");
					
				}
				
			});
			
		} );
		
	} );
		function refresh(){
		$.ajax( {
		url:"/blog",
		type:"GET",
		async:true,
		timeout:3000,
		success:function (data){
			$(".posts_div").empty().html(data);
			
		}
		
		
	} );
	}
	
	//setInterval(refresh,2000);
	
}  )  ;