$(document).ready( function(){
	$.ajaxSetup({
		headers:{
					'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
					}
	});
	$(".product-category").find("a").each( function(){
		$(this).on('click',function(e){
			e.stopImmediatePropagation();
			e.preventDefault();
			//alert("hit");
			var url=$(this).attr("href");
			$.ajax({
				type:'GET',
				url:url,
				success:function(data){
					$(".ajax_div").empty().html(data);
					//alert("hi");
					
				}
			});
			
		}  );
	} );
}  );