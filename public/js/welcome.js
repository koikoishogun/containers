$(document).ready( function(){
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	//load welcome page
	/*$.ajax({
		type:"GET",
		url:"/welcome",
		async:true,
		success:function(data){
		   $(".ajax_div").empty().html(data);
		}
	});*/
	$(".sub_btn").click( function(){
		$.ajax({
			type:"GET",
			url:"/new/subscriber/",
			success:function(data){
				
				$("#empty").empty().html(data);
			}
		});
	} );
	
	/*$(".catalogue_btn").click(function () {
		$.ajax({
			tye:"GET",
			url:"/get/catalogue/",
			success:function(data){
				$( " .empty").empty().html(data);
			}
		});
	});*/
	
} );