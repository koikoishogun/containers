$(document).ready(   function() {
	
	
	$.ajaxSetup({
			headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	/*    handle ajax request for navbar                   */
	$(".home").click( function(){
		$.ajax({
			type:"GET",
			url:"/",
			success:function(data){
				
				$("body").empty().html(data);
			}
		});
	} );
	$(".about_us").click( function(){
		$.ajax({
			type:"GET",
			url:"/about-us",
			success:function(data){
				
				$("body").empty().html(data);
			}
		});
	} );
	$(".produc").click( function(){
		$.ajax({
			type:"GET",
			url:"/products",
			success:function(data){
				
				$("body").empty().html(data);
			}
		});
	} );
	$(".bloga").click( function(){
		$.ajax({
			type:"GET",
			url:"/blog",
			success:function(data){
				
				$("body").empty().html(data);
			}
		});
	} );
	/*     END  handle ajax request for navbar                   */
} );