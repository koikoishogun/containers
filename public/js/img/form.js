$(document).ready(function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".img_form").submit(function (e){
		e.preventDefault();
		var d=new FormData(this);
		$.ajax({
			
			type:"POST",
			url:"/upload/pic",
			async:true,
			contentType:false,
			processData:false,
			data:d,
			success:function(){
				$(".img_form")[0].reset();
				//$("#msg_modal").modal("show");
				alert(data);
			}
		});
		
	} );
});