$(document).ready(  function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
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
	
	setInterval(refresh,30000);
	
}  )  ;