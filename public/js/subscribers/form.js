$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$("#sub_form").submit(  function(e){
		e.preventDefault();
		//alert("hi");
		var da= new FormData(this);
		$.ajax({
			type:"POST",
			url:"/save/subscriber",
			data:da,
			async:true,
			contentType:false,
			processData:false,
			success:function(data){
				$("#form_div").empty().html(data);
			}
		})
	
    });
	
	
	
}    );