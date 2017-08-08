$(document).ready(  function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$("").click(function(){
		$.ajax({
			type:"GET",
			url:"/show/msg",
			async:true,
			success:function(data){
				$().empty().html();
				
			}
		});
	} );
}   );