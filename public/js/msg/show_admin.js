$(document).ready(  function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".msg_li").click(function(){
		$.ajax({
			type:"GET",
			url:"/show/msg",
			async:true,
			success:function(data){
				$(".update_div").empty().html(data);
				
			}
		});
	} );
}   );