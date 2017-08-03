$(document).ready(function(){
	
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".msg_form").submit( function(e){
		e.preventDefault();
		var d=new FormData(this);
		$.ajax({
			type:"POST",
			url:"/send/msg",
			contentType:false,
			processData:false,
			data:d,
			success:function(){
				$(".msg_form")[0].reset();
				$("#msg_modal").modal("show");
			}
		});
		
	} );
});