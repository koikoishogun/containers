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
			url:"/welcome",
			success:function(data){
				
				$(".ajax_div").empty().html(data);
			}
		});
	} );
	$(".about_us").click( function(){
		$.ajax({
			type:"GET",
			url:"/about-us",
			success:function(data){
				
				$(".ajax_div").empty().html(data);
			}
		});
	} );
	$(".products").each( function(){

			  $(this).click( function(){
						$.ajax({
					type:"GET",
					url:"/products",
					success:function(data){
						
						$(".ajax_div").empty().html(data);
					}
				});

		  
	  }  );



	} );
	$(".blog_li").click( function(){
		$.ajax({
			type:"GET",
			url:"/blog",
			success:function(data){
				
				$(".ajax_div").empty().html(data);
			}
		});
	} );
	/*     END  handle ajax request for navbar                   */
} );