$(document).ready(   function(){
	
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	
	//return orders
	$(".order_li").click( function(){
		$.ajax({
			type:"GET",
			url:"/orders",
			success:function(data){
				
				$(".update_div").empty().html(data);
			}
		});
	} );
	//return interested
	$(".int_li").click( function(){
		$.ajax({
			type:"GET",
			url:"/interested",
			success:function(data){
				
				$(".update_div").empty().html(data);
			}
		});
	} );
	//return blog
	$(".blog_li").click( function(){
		$.ajax({
			type:"GET",
			url:"/post-blog",
			success:function(data){
				
				$(".update_div").empty().html(data);
			}
		});
	} );
} );